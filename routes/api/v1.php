<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Resources\ApiSendingErrorException;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 /**
    * @OA\Get(
    *     path="/api/v1",
    *     description="Home page",
    *     @OA\Response(response="default", description="Welcome page")
    * )
    */
Route::get('/', HomeController::class);

Route::group(
    [
        'middleware' => 'api',
        'namespace'  => 'App\Http\Controllers\Api\V1',
        'prefix'     => 'auth'
    ],
    function () use ($router) {
        /**
         * @OA\Post(
         *     path="/api/v1/auth/login",
         *     description="Login",
         *     @OA\Response(response="default", description="Welcome page")
         * )
         */
        $router->post('/login', 'AuthController@login');
       
        /**
         * @OA\Post(
         *     path="/api/v1/auth/register",
         *     description="Register",
         *     @OA\Response(response="default", description="Welcome page"),
         *     security={
         *           {"bearerAuth": {}}
         *       }
         * )
         */
        $router->post('/register', 'AuthController@register');
        /**
         * @OA\Post(
         *     path="/api/v1/auth/logout",
         *     description="Logout",
         *     @OA\Response(response="default", description="Welcome page")
         * )
         */
        $router->post('/logout', 'AuthController@logout');
        /**
         * @OA\Get(
         *     path="/api/v1/auth/me",
         *     description="Profile",
         *     @OA\Response(response="default", description="Welcome page"),
         *  security={
         *           {"bearerAuth": {}}
         *       },
         * )
         */
        $router->get('/me', 'AuthController@me');
        /**
         * @OA\Post(
         *     path="/api/v1/auth/refresh",
         *     description="Refresh token",
         *     @OA\Response(response="default", description="Welcome page")
         * )
         */
        $router->post('/refresh', 'AuthController@refresh');
    }
);

Route::any('{any}', function(){
    return ApiSendingErrorException::sendingError([
        'errNo'=>7, 
        'errMsg'=>'Resource not found', 
        'statusCode'=>Response::HTTP_NOT_FOUND
    ]);
})->where('any', '.*');
