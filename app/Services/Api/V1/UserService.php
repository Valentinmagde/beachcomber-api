<?php

namespace App\Services\Api\V1;

use Illuminate\Http\Response;
use App\Models\Api\V1\User;
use App\Models\Api\V1\UserGroup;
use App\Http\Helpers\HelperFunctions;
use App\Http\Resources\ApiSendingResponse;
use App\Http\Resources\ApiSendingErrorException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ApiErrorNumbers;
use Illuminate\Database\QueryException;

class UserService
{   
    // ------------------------------------------------------------------------------------------
    // @ Publics methods
    // ------------------------------------------------------------------------------------------

    /**
     * Get user by id
     * 
     * @param $id
     * 
     * @return $user
     */
    public static function getById($id)
    {
        try{
            $user = User::find($id);

            if(!$user)
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found,
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            else
                return ApiSendingResponse::sendingResponse([
                    'successMsg'=> __('user.successfulOperation'),
                    'data'=>$user, 
                    'statusCode'=>Response::HTTP_OK
                ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        }
    }

    /**
     * Get all users
     * 
     * @return array of users
     */
    public static function getAll()
    {
        try{
            $users = User::all();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=>__('user.successfulOperation'),
                'data'=> $users, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        }
       
    }

    /**
     * Get all users by group
     * 
     * @param @groupId
     * 
     * @return array of users
     */
    public static function getAllByGroup($groupId)
    {
        try{
            // Get group by id
            $group = UserGroup::find($groupId);

            if(!$group){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.groupNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $users = User::where('user_group_id', $groupId)->get();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.successfulOperation'),
                'data'=> $users, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        }
    }

    /**
     * Upload avatar
     * 
     * @param $userId
     * @param $avatar
     * 
     * @return $user
     */
    public function uploadAvatar($avatar, $userId)
    {
        try{
            $user = User::find($userId);

            if(!$user){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            // Make a image based name on user name and timestamp
            // Define folder path
            // Make a file path where image will be stored [folder path + file name + file extension]
            // Store image
            // Set user profile image path in database to file full path
            $name = str_slug($user->user_surname).'_'.time().'.'.$avatar->getClientOriginalExtension();
            $folder = '/uploads/avatars';
            // $filePath = $folder . $name . '.' . $avatar->getClientOriginalExtension();
            $fileFullPath = Storage::disk('public')->putFileAs($folder, $avatar, $name);
            $user->avatar = $fileFullPath;

            // Persist user record to database
            $user->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.avatarUploadedSuccessfully'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Update user
     * 
     * @param $userId
     * @param $data
     * 
     * @return $user
     */
    public function update($data, $userId)
    {
        try{
            $user = User::find($userId);

            if(!$user){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
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
                'successMsg'=> __('user.userUpdatedSuccessfully'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Assign a group to a user
     * 
     * @param $userId
     * @param $groupId
     * 
     * @return $user
     */
    public function assignGroup($userId, $groupId)
    {
        try{
            $user = User::find($userId);

            if(!$user)
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }
            else{
                $group = UserGroup::find($groupId);

                if(!$group){
                    return ApiSendingErrorException::sendingError([
                        'errNo'=>ApiErrorNumbers::$resource_not_found, 
                        'errMsg'=> __('user.groupNotExist'), 
                        'statusCode'=>Response::HTTP_NOT_FOUND
                    ]);
                }

                $user->user_group_id = $groupId;
                $user->save();
            }
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.groupAssignedSuccessfully'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Unassign a group to a user
     * 
     * @param $userId
     * @param $groupId
     * 
     * @return $user
     */
    public function unAssignGroup($userId, $groupId)
    {
        try{
            $user = User::find($userId);

            if(!$user)
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }
            else{
                $group = UserGroup::find($groupId);

                if(!$group){
                    return ApiSendingErrorException::sendingError([
                        'errNo'=>ApiErrorNumbers::$resource_not_found, 
                        'errMsg'=> __('user.groupNotExist'),
                        'statusCode'=>Response::HTTP_NOT_FOUND
                    ]);
                }
                else{
                    if($user->user_group_id != $groupId)
                        return ApiSendingErrorException::sendingError([
                            'errNo'=>ApiErrorNumbers::$resource_not_found, 
                            'errMsg'=> __('user.groupNotAssignedToUser'), 
                            'statusCode'=>Response::HTTP_BAD_REQUEST
                        ]);
                }

                $user->user_group_id = 0;
                $user->save();
            }
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.groupUnassignedSuccessfully'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Activate a user
     * 
     * @param $userId
     * 
     * @return $user
     */
    public function activate($userId)
    {
        try{
            $user = User::find($userId);

            if(!$user)
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $user->active = 1;
            $user->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.userActivatedSuccessfully'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Deactivate a user
     * 
     * @param $userId
     * 
     * @return $user
     */
    public function deactivate($userId)
    {
        try{
            $user = User::find($userId);

            if(!$user)
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $user->active = 0;
            $user->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.userDeactivatedSuccessfully'),
                'data'=>$user, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Delete a user
     * 
     * @param $userId
     * 
     * @return $user
     */
    public function destroy($userId)
    {
        try{
            $user = User::find($userId);

            if(!$user)
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('user.userNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $user->delete();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('user.userDeletedSuccessfully'),
                'data'=>null, 
                'statusCode'=>Response::HTTP_NO_CONTENT
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }
}