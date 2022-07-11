<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiSendingErrorException;
use App\Http\Ressources\ApiSendingResponse;
use App\Models\Api\V1\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
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

        return $this->respondWithToken($token);
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
     *      @OA\RequestBody(
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
    *       @OA\SecurityScheme(
    *           securityScheme="bearerAuth",
    *           in="header",
    *           name="bearerAuth",
    *           type="http",
    *           scheme="bearer",
    *           bearerFormat="JWT",
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
     *     )
     * 
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
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

        return response()->json(['message' => 'Successfully logged out']);
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

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $user = auth()->user();
        
        // Remove password from user response
        unset($user->user_password);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => $user
        ]);
    }
}
