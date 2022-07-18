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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            else
                return ApiSendingResponse::sendingResponse([
                    'successMsg'=>'Successful operation',
                    'data'=>User::find($id), 
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
     * Get all users
     * 
     * @return array of users
     */
    public static function getAll()
    {
        try{
            $users = User::all();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'Successful operation',
                'data'=> $users, 
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
                    'errNo'=>7, 
                    'errMsg'=>'This group does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $users = User::where('user_group_id', $groupId)->get();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'Successful operation',
                'data'=> $users, 
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
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
                'successMsg'=>'Avatar uploaded successfully',
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }
            else{
                $group = UserGroup::find($groupId);

                if(!$group){
                    return ApiSendingErrorException::sendingError([
                        'errNo'=>7, 
                        'errMsg'=>'This group does not exist', 
                        'statusCode'=>Response::HTTP_NOT_FOUND
                    ]);
                }

                $user->user_group_id = $groupId;
                $user->save();
            }
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'Group assigned successfully',
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }
            else{
                $group = UserGroup::find($groupId);

                if(!$group){
                    return ApiSendingErrorException::sendingError([
                        'errNo'=>7, 
                        'errMsg'=>'This group does not exist', 
                        'statusCode'=>Response::HTTP_NOT_FOUND
                    ]);
                }
                else{
                    if($user->user_group_id != $groupId)
                        return ApiSendingErrorException::sendingError([
                            'errNo'=>7, 
                            'errMsg'=>'This group is not assigned to this user', 
                            'statusCode'=>Response::HTTP_BAD_REQUEST
                        ]);
                }

                $user->user_group_id = 0;
                $user->save();
            }
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'Group unassigned successfully',
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $user->active = 1;
            $user->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'User activated successfully',
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $user->active = 0;
            $user->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'User deactivated successfully',
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
                    'errNo'=>7, 
                    'errMsg'=>'This user does not exist', 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $user->delete();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'User deleted successfully',
                'data'=>null, 
                'statusCode'=>Response::HTTP_NO_CONTENT
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