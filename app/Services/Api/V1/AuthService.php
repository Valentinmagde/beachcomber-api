<?php

namespace App\Services\Api\V1;

use Illuminate\Http\Response;
use App\Models\Api\V1\User;
use App\Http\Helpers\HelperFunctions;
use App\Http\Resources\ApiSendingResponse;
use App\Http\Resources\ApiSendingErrorException;
use App\Http\Resources\ApiErrorNumbers;

class AuthService
{
    /**
     * Login a user
     * 
     * @param $data
     * 
     * @return token
     */
    public function login($data)
    {
        try{
            if (!$token = auth()->attempt([
                'user_email' => $data['user_email'], 
                'password'   => $data['user_password']
                ]))
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$bad_login_credentials,
                    'errMsg'=> __('auth.login.incorrectUserEmailOrPassword'), 
                    'statusCode'=>Response::HTTP_BAD_REQUEST
                ]);
            }
    
            return HelperFunctions::respondWithToken($token);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>8, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        } 
    }

    /**
     * Logout a user
     */
    public function logout()
    {
        try{
            auth()->logout();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('auth.logout.successfullyLoggedOut'),
                'data'=> null, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>8, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        } 
    }

    /**
     * Refresh token
     * 
     * @return new token 
     */
    public function refresh()
    {
        try{
            return HelperFunctions::respondWithToken(auth()->refresh());
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>8, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }
    
    /**
     * Get authenticate user
     * 
     * @return $user
     */
    public function show()
    {
        try{
            $user = auth()->user();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('auth.show.successfulOperation'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>8,
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        } 
    }

    /**
     * Register a user
     * 
     * @param $data
     * 
     * @return $user
     */
    public function register($data)
    {
        try{
            $data['user_password'] = bcrypt($data['user_password']);
            $user = User::create($data);

            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('auth.register.userWasSuccessfullyCreated'),
                'data'=>$user,
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>8, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        } 
    }

     /**
     * Update authenticate user
     * 
     * @param $userId
     * @param $data
     * 
     * @return $user
     */
    public function update($data)
    {
        try{
            $user = auth()->user();

            if(!$user){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('auth.update.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            // Prevent these fields from being updated
            $user->makeHidden('user_email');
            $user->makeHidden('user_type_id');
            $user->makeHidden('user_group_id');
            
            //Fill user with new data
            // Persist user record to database
            $user->fill($data);
            $user->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('auth.update.userUpdatedSuccessfully'),
                'data'=>$user,
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>8, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        } 
    }
}