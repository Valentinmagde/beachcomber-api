<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
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
Route::group(
    [
        'namespace'  => 'App\Http\Controllers\Api\V1',
        'prefix' => '{locale}', 
        'where' => ['locale' => '[a-zA-Z]{2}'], 
        'middleware' => 'setlocale'
    ],
    function () use ($router) {
        $router->get('/', HomeController::class);
    }
);

Route::group(
    [
        'middleware' => 'api',
        'namespace'  => 'App\Http\Controllers\Api\V1',
        'prefix' => '{locale}', 
        'where' => ['locale' => '[a-zA-Z]{2}'], 
        'middleware' => 'setlocale'
    ],
    function () use ($router) {

        /*
        |--------------------------------------------------------------------------
        | API Routes of Authentification
        |--------------------------------------------------------------------------
        |
        */
        Route::group(['prefix' => 'auth'], function () use ($router) {
            /**
             * @OA\Post(
             *     path="/api/v1/{lang}/auth/login",
             *     description="Login",
             *     @OA\Response(response="default", description="User login")
             * )
             */
            $router->post('/login', 'AuthController@login');
        
            /**
             * @OA\Post(
             *     path="/api/v1/{lang}/auth/register",
             *     description="Register",
             *     @OA\Response(response="default", description="User register")
             * )
             */
            $router->post('/register', 'AuthController@register');
            
            /**
             * @OA\Post(
             *     path="/api/v1/{lang}/auth/logout",
             *     description="Logout",
             *     @OA\Response(response="default", description="Logout")
             * )
             */
            $router->post('/logout', 'AuthController@logout');
            
            /**
             * @OA\Get(
             *     path="/api/v1/{lang}/auth/me",
             *     description="Profile",
             *     @OA\Response(response="default", description="Profile endpoint")
             * )
             */
            $router->get('/me', 'AuthController@me');
            
            /**
             * @OA\Put(
             *     path="/api/v1/{lang}/auth/update",
             *     description="Update user",
             *     @OA\Response(response="default", description="User update endpoint")
             * )
             */
            $router->put('/update', 'AuthController@update');
            
            /**
             * @OA\Post(
             *     path="/api/v1/{lang}/auth/refresh",
             *     description="Refresh token",
             *     @OA\Response(response="default", description="Refresh token")
             * )
             */
            $router->post('/refresh', 'AuthController@refresh');
        });

        /*
        |--------------------------------------------------------------------------
        | API Routes of User
        |--------------------------------------------------------------------------
        |
        */
        Route::group([], function () use ($router) {
            Route::group(['prefix' => 'users'], function () use ($router) {
                
                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/users",
                 *     description="Get all users",
                 *     @OA\Response(response="default", description="All users")
                 * )
                 */
                $router->get('/', 'UserController@index');
            
                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/users/group/{groupId}",
                 *     description="Get users by group id",
                 *     @OA\Response(response="default", description="Users by group id")
                 * )
                 */
                $router->get('/group/{groupId}', 'UserController@showByGroupId');
            });

            Route::group(['prefix' => 'user'], function () use ($router) {
                
                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/user/{userId}",
                 *     description="Get user by group id",
                 *     @OA\Response(response="default", description="User by id")
                 * )
                 */
                $router->get('/{userId}', 'UserController@showById');
                
                /**
                 * @OA\Post(
                 *     path="/api/v1/{lang}/user/{userId}/avatar",
                 *     description="Update user avatar",
                 *     @OA\Response(response="default", description="User avatar")
                 * )
                 */
                $router->post('/{userId}/avatar', 'UserController@uploadAvatar');

                /**
                 * @OA\Put(
                 *     path="/api/v1/{lang}/user/{userId}",
                 *     description="Update user",
                 *     @OA\Response(response="default", description="User update")
                 * )
                 */
                $router->put('/{userId}', 'UserController@update');

                /**
                 * @OA\Patch(
                 *     path="/api/v1/{lang}/user/{userId}",
                 *     description="Update user",
                 *     @OA\Response(response="default", description="User update")
                 * )
                 */
                $router->patch('/{userId}', 'UserController@update');

                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/user/{userId}/group/{groupId}/assign",
                 *     description="Assign group to a user",
                 *     @OA\Response(response="default", description="Assign group")
                 * )
                 */
                $router->get('/{userId}/group/{groupId}/assign', 'UserController@assignGroup');

                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/user/{userId}/group/{groupId}/unassign",
                 *     description="Unassign group to a user",
                 *     @OA\Response(response="default", description="Unassign group")
                 * )
                 */
                $router->get('/{userId}/group/{groupId}/unassign', 'UserController@unAssignGroup');

                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/user/{userId}/activate",
                 *     description="Activate a user",
                 *     @OA\Response(response="default", description="Activate user")
                 * )
                 */
                $router->get('/{userId}/activate', 'UserController@activate');

                /**
                 * @OA\Get(
                 *     path="/api/v1/{lang}/user/{userId}/deactivate",
                 *     description="Deactivate a user",
                 *     @OA\Response(response="default", description="Deactivate user")
                 * )
                 */
                $router->get('/{userId}/deactivate', 'UserController@deactivate');

                /**
                 * @OA\Delete(
                 *     path="/api/v1/{lang}/user/{userId}",
                 *     description="Delete a user",
                 *     @OA\Response(response="default", description="Delete user")
                 * )
                 */
                $router->delete('/{userId}', 'UserController@destroy');
            });
        });
    }
);

/**
 * Endpoint for all roads that do not exist
 */
Route::any('{any}', function(){
    return ApiSendingErrorException::sendingError([
        'errNo'=>7, 
        'errMsg'=>'Resource not found', 
        'statusCode'=>Response::HTTP_NOT_FOUND
    ]);
})->where('any', '.*');
