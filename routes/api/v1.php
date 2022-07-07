<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HomeController;
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
         *     description="Home page",
         *     @OA\Response(response="default", description="Welcome page")
         * )
         */
        $router->post('/login', 'AuthController@login');
        $router->post('/register', 'AuthController@register');
        $router->post('/logout', 'AuthController@logout');
        $router->get('/me', 'AuthController@me');
        $router->post('/refresh', 'AuthController@refresh');
    }
);
