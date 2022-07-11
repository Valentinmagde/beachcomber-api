<?php
namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use App\Http\Resources\ApiSendingErrorException;
use Illuminate\Http\Response;


class JwtMiddleware extends BaseMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		try 
        {
		   $user = JWTAuth::parseToken()->authenticate();
 		} 
        catch (Exception $e) 
        {
        	if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>6, 
                    'errMsg'=>'Token is Invalid', 
                    'statusCode'=>Response::HTTP_UNAUTHORIZED
                ]);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>5, 
                    'errMsg'=>'Token is Expired', 
                    'statusCode'=>Response::HTTP_UNAUTHORIZED
                ]);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>4, 
                    'errMsg'=>'Token is Blacklisted', 
                    'statusCode'=>Response::HTTP_UNAUTHORIZED
                ]);
            }else{
                return ApiSendingErrorException::sendingError([
                    'errNo'=>3, 
                    'errMsg'=>'Authorization Token not found', 
                    'statusCode'=>Response::HTTP_UNAUTHORIZED
                ]);
            }
		}
        
        return $next($request);
	}
}