<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($e instanceof \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], $e->getStatusCode());
        }

        try {
            $user = JWTAuth::parseToken()->authenticate();
            if( !$user ) throw new Exception('User Not Found');

        } catch (Exception $e) {

            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException)
            {
                return response()->json([
                    'data' => null,
                    'status' => false,
                    'err_' => [
                        'message' => 'Token Invalid',
                        'code' => 1
                    ]
                ]);
            }
            else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
            {
                return response()->json([
                    'data' => null,
                    'status' => false,
                    'err_' => [
                        'message' => 'Token Expired',
                        'code' =>1
                    ]
                ]);
            }
            else
            {
                if( $e->getMessage() === 'User Not Found') 
                {
                    return response()->json([
                        "data" => null,
                        "status" => false,
                        "err_" => [
                            "message" => "User Not Found",
                            "code" => 1
                        ]
                    ]); 
                }
            
                return response()->json([
                    'data' => null,
                    'status' => false,
                    'err_' => [
                        'message' => 'Authorization Token not found',
                        'code' =>1
                    ]
                ]);
            }
        }
        
        return $next($request); 
        return parent::render($request, $exception);
    }
}
