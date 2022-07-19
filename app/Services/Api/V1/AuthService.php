<?php

namespace App\Services\Api\V1;

use Illuminate\Http\Response;
use App\Models\Api\V1\User;
use App\Http\Helpers\HelperFunctions;
use App\Http\Resources\ApiSendingResponse;
use App\Http\Resources\ApiSendingErrorException;

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
                    'errNo'=>2, 
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
        auth()->logout();

        return ApiSendingResponse::sendingResponse([
            'successMsg'=>'Successfully logged out',
            'data'=> null, 
            'statusCode'=>Response::HTTP_OK
        ]);
    }

    /**
     * Refresh token
     * 
     * @return new token 
     */
    public function refresh()
    {
        return HelperFunctions::respondWithToken(auth()->refresh());
    }
    
    /**
     * Get authenticate user
     * 
     * @return $user
     */
    public function show()
    {
        return ApiSendingResponse::sendingResponse([
            'successMsg'=>'Successful operation',
            'data'=>auth()->user(), 
            'statusCode'=>Response::HTTP_OK
        ]);
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
                'successMsg'=>'User created successfully',
                'data'=>User::find($user->user_id), 
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
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
                'successMsg'=>'User updated successfully',
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