<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Api\V1\User;
use App\Services\Api\V1\UserService;
use App\Http\Resources\ApiSendingErrorException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Resources\ApiErrorNumbers;

class UserController extends Controller
{
    /**
     * Create a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.verify', []);
    }

    /**
     * @OA\Get(
     *      path="/api/v1/{lang}/users",
     *      operationId="index",
     *      tags={"Users"},
     *      summary="Get all users",
     *      description="Returns all users",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Users successfully collects",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *                @OA\Property(property="data", type="array",
     *                    @OA\Items(
     *                        @OA\Property(property="user_id", type="integer", example="number"),
     *                        @OA\Property(property="user_type_id", type="integer", example="number"),
     *                        @OA\Property(property="user_group_id", type="integer", example="number"),
     *                        @OA\Property(property="user_surname", type="string", example="string"),
     *                        @OA\Property(property="user_othername", type="string", example="string"),
     *                        @OA\Property(property="user_email", type="string", example="string"),
     *                        @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                        @OA\Property(property="user_phone", type="string", example="string"),
     *                        @OA\Property(property="user_name", type="string", example="string"),
     *                        @OA\Property(property="active", type="integer", example="number")
     *                    ),
     *                ),
     *           )
     *       ),
     *       security={
     *         {"bearer": {}}
     *       },
     *       @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *    ),
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserService::getAll();
    }

    /**
     * @OA\Get(
     *      path="/api/v1/{lang}/users/group/{groupId}",
     *      operationId="showByGroupId",
     *      tags={"Users"},
     *      summary="Get all users by group id",
     *      description="Returns all users",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *       @OA\Parameter(
     *          name="groupId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Users successfully collects",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="array",
     *                    @OA\Items(
     *                      @OA\Property(property="user", type="object",
     *                        @OA\Property(property="user_id", type="integer", example="number"),
     *                        @OA\Property(property="user_type_id", type="integer", example="number"),
     *                        @OA\Property(property="user_group_id", type="integer", example="number"),
     *                        @OA\Property(property="user_surname", type="string", example="string"),
     *                        @OA\Property(property="user_othername", type="string", example="string"),
     *                        @OA\Property(property="user_email", type="string", example="string"),
     *                        @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                        @OA\Property(property="user_phone", type="string", example="string"),
     *                        @OA\Property(property="user_name", type="string", example="string"),
     *                        @OA\Property(property="active", type="integer", example="number")
     *                      ),
     *                    ),
     *                ),
     *               
     *           )
     *       ),
     *       security={
     *         {"bearer": {}}
     *       },
     *       @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *    ),
     * 
     * Display a listing of the specified resource.
     * @param int $groupId
     *
     * @return \Illuminate\Http\Response
     */
    public function showByGroupId($locale, $groupId)
    {
        return UserService::getAllByGroup($groupId);
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/{lang}/user/{userId}",
     *      operationId="showById",
     *      tags={"Users"},
     *      summary="Get user by id",
     *      description="Get by id here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="User successfully collects",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *             )
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * 
     * Display the specified resource.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function showById($locale, $userId)
    {
        return UserService::getById($userId);
    }

    /**
     *   @OA\Post(
     *      path="/api/v1/{lang}/user/{userId}/avatar",
     *      operationId="uploadAvatar",
     *      tags={"Users"},
     *      summary="Upload Avatar",
     *      description="Upload Avatar",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"avatar"},
     *               @OA\Property(property="avatar", type="file", example="file")
     *            ),
     *        ),
     *    ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="Avatar uploaded successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *             )
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * 
     * Display the specified resource.
     *
     * @param  int  $userId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadAvatar(Request $request, $locale, $userId)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$validator, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return UserService::uploadAvatar($request->file('avatar'), $userId);
    }

    /**
     *   @OA\Put(
     *      path="/api/v1/{lang}/user/{userId}",
     *      operationId="update",
     *      tags={"Users"},
     *      summary="update user by id",
     *      description="update by id here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"user_surname"},
     *                @OA\Property(property="user_surname", type="string", example="string"),
     *                @OA\Property(property="user_othername", type="string", example="string"),
     *                @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                @OA\Property(property="user_phone", type="string", example="string"),
     *                @OA\Property(property="user_name", type="string", example="string")
     *            ),
     *        ),
     *       @OA\MediaType(
     *            mediaType="application/json",
     *            @OA\Schema(
     *               type="object",
     *               required={"user_surname"},
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string")
     *            ),
     *        ),
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="User updated successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *           ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string")
     *          )
     *       ),
     * )
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $locale, $userId)
    {
        $validator = Validator::make($request->all(), [
            'user_surname' => 'required',
        ]);
    
        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$validator, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return UserService::update($request->all(), $userId);
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/{lang}/user/{userId}/group/{groupId}/assign",
     *      operationId="assignGroup",
     *      tags={"Users"},
     *      summary="Assign group to a user",
     *      description="Assign group by is here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="groupId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="Group assigned successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *            ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * Assign the group to th specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $userId
     * @param  int  $groupId
     * @return \Illuminate\Http\Response
     */
    public function assignGroup($locale, $userId, $groupId)
    {
        return UserService::assignGroup($userId, $groupId);
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/{lang}/user/{userId}/group/{groupId}/unassign",
     *      operationId="unAssignGroup",
     *      tags={"Users"},
     *      summary="Unassign group to a user",
     *      description="Unassign group by is here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="groupId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="Group unassigned successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *            ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * Unassign the group to th specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $userId
     * @param  int  $groupId
     * @return \Illuminate\Http\Response
     */
    public function unAssignGroup($locale, $userId, $groupId)
    {
        return UserService::unAssignGroup($userId, $groupId);
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/{lang}/user/{userId}/activate",
     *      operationId="activate",
     *      tags={"Users"},
     *      summary="Activate a user",
     *      description="Activate by is here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="User activated successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *            ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * activate the specified resource in storage.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function activate($locale, $userId)
    {
        return UserService::activate($userId);
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/{lang}/user/{userId}/deactivate",
     *      operationId="deactivate",
     *      tags={"Users"},
     *      summary="Deactivate a user",
     *      description="Deactivate by is here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="User deactivated successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="user_id", type="integer", example="number"),
     *                   @OA\Property(property="user_type_id", type="integer", example="number"),
     *                   @OA\Property(property="user_group_id", type="integer", example="number"),
     *                   @OA\Property(property="user_surname", type="string", example="string"),
     *                   @OA\Property(property="user_othername", type="string", example="string"),
     *                   @OA\Property(property="user_email", type="string", example="string"),
     *                   @OA\Property(property="user_jobtitle", type="string", example="string"),
     *                   @OA\Property(property="user_phone", type="string", example="string"),
     *                   @OA\Property(property="user_name", type="string", example="string"),
     *                   @OA\Property(property="active", type="integer", example="number")
     *               ),
     *          ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * activate the specified resource in storage.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function deactivate($locale, $userId)
    {
        return UserService::deactivate($userId);
    }

    /**
     * @OA\Delete(
     *      path="/api/v1/{lang}/user/{userId}",
     *      operationId="destroy",
     *      tags={"Users"},
     *      summary="Delete user",
     *      description="Delete user",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="User deleted successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object", example="null")
     *          ),
     *       ),
     *       @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *    ),
     * Remove the specified resource from storage.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $userId)
    {
        return UserService::destroy($userId);
    }
}
