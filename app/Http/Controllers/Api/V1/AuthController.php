<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiSendingErrorException;
use App\Http\Resources\ApiSendingResponse;
use App\Http\Helpers\HelperFunctions;
use App\Models\Api\V1\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
    }

    /**
        * @OA\Post(
        * path="/api/v1/auth/login",
        * operationId="authLogin",
        * tags={"Authentification"},
        * summary="User Login",
        * description="Login User Here",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *               required={"user_email", "user_password"},
        *               @OA\Property(property="user_email", type="email", example="example@beachcomber.com"),
        *               @OA\Property(property="user_password", type="password", example="beachcomber")
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=200,
        *          description="Login Successfully",
        *          @OA\JsonContent(
        *               @OA\Property(property="access_token", type="string", example="string"),
        *               @OA\Property(property="token_type", type="string", example="string"),
        *               @OA\Property(property="expires_in", type="integer", example="360"),
        *               @OA\Property(property="user", type="object", example="{}"),
        *),
        *       ),
        *      @OA\Response(
        *           response=400, 
        *           description="Bad request",
        *           @OA\JsonContent(
        *               @OA\Property(property="error", type="string", example="The user email or password field is required."),
        *           )
        *      ),
        *       @OA\Response(
        *           response=401, 
        *           description="Unauthorized",
        *           @OA\JsonContent(
        *               @OA\Property(property="error", type="string", example="Unauthorized"),
        *           )
        *      ),
        *      @OA\Response(
        *           response=404, 
        *           description="Resource Not Found",
        *           @OA\JsonContent(
        *               @OA\Property(property="error", type="string", example="Resource Not Found"),
        *           )
        *       ),
        * )
        *
        */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email'     => 'required|email',
            'user_password'  => 'required|min:6'
        ]);
    
        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            
            return ApiSendingErrorException::sendingError([
                'errNo'=>1, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }
        
        if (!$token = auth()->attempt([
            'user_email' =>$request->user_email, 
            'password' =>$request->user_password])) {
            return ApiSendingErrorException::sendingError([
                'errNo'=>2, 
                'errMsg'=>'Incorrect user email or password', 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return HelperFunctions::respondWithToken($token);
    }

    /**
        * @OA\Post(
        * path="/api/v1/auth/register",
        * operationId="Register",
        * tags={"Authentification"},
        * summary="User Register",
        * description="User Register here",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Register Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Register Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email'     => 'required|email',
            'user_password'      => 'required|min:6'
        ]);
    
        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return response()->json($error, Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @OA\Get(
     *      path="/api/v1/auth/me",
     *      operationId="getProfile",
     *      tags={"Authentification"},
     *      summary="Get the logged in user",
     *      description="Returns current user",
     *      @OA\Response(
    *          response=200,
    *          description="User successfully collects",
    *          @OA\JsonContent(
    *               @OA\Property(property="user_id", type="integer", example="number"),
    *               @OA\Property(property="user_type_id", type="integer", example="number"),
    *               @OA\Property(property="user_group_id", type="integer", example="number"),
    *               @OA\Property(property="user_surname", type="string", example="string"),
    *               @OA\Property(property="user_othername", type="string", example="string"),
    *               @OA\Property(property="user_email", type="string", example="string"),
    *               @OA\Property(property="user_jobtitle", type="string", example="string"),
    *               @OA\Property(property="user_phone", type="string", example="string"),
    *               @OA\Property(property="user_name", type="string", example="string"),
    *               @OA\Property(property="active", type="integer", example="number")
    *           )
    *       ),
    *       security={
    *         {"bearer": {}}
    *       }
    *    ),
    *      @OA\Response(
    *          response=201,
    *          description="User successfully collects",
    *          @OA\JsonContent()
    *      ),
    *      @OA\Response(
    *          response=422,
    *          description="Unprocessable Entity",
    *          @OA\JsonContent()
    *       ),
    *      @OA\Response(response=400, description="Bad request"),
    *      @OA\Response(response=404, description="Resource Not Found"),
     *     )
     * 
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return ApiSendingResponse::sendingResponse([
            'successMsg'=>'Successful operation',
            'data'=>HelperFunctions::unsetProperty(auth()->user(), 'user_password'), 
            'statusCode'=>Response::HTTP_OK
        ]);
    }

    /**
        * @OA\Post(
        * path="/api/v1/auth/logout",
        * operationId="authLogout",
        * tags={"Authentification"},
        * summary="User Logout",
        * description="Logout User Here",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Logout Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Logout Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        * Log the user out (Invalidate the token).
        *
        * @return \Illuminate\Http\JsonResponse
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
        * @OA\Post(
        * path="/api/v1/auth/refresh",
        * operationId="authRefresh",
        * tags={"Authentification"},
        * summary="Refresh token",
        * description="Refresh Token Here",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Refresh Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Refresh Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        * Refresh a token.
        *
        * @return \Illuminate\Http\JsonResponse
        */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
}
