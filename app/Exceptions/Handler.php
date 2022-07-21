<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;
use Illuminate\Http\Response;
use App\Http\Resources\ApiSendingErrorException;
use App\Http\Resources\ApiErrorNumbers;
use Illuminate\Database\QueryException;

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

    public function render($request, Throwable $e)
    {
        $locale = $request->segment(3);
        app()->setLocale($request->segment(3));

        if ($e instanceof MethodNotAllowedHttpException) {
            $message1 = explode(' ', $e->getMessage());
            $message2 = explode(':', $e->getMessage());
            $smethod = $message1[1];
            $emethod = $message2[1];

            return ApiSendingErrorException::sendingError([
                'errNo'=> ApiErrorNumbers::$not_allowed_method, 
                'errMsg'=> __('auth.theMethod').' '.$smethod.' '.__('auth.isNotSupportedForThisRoute').' '.$emethod, 
                'statusCode'=>Response::HTTP_METHOD_NOT_ALLOWED
            ]);
        }

        if ($e instanceof NotFoundHttpException) {
            return ApiSendingErrorException::sendingError([
                'errNo'=> ApiErrorNumbers::$resource_not_found, 
                'errMsg'=> __('auth.ressourceNotFound'), 
                'statusCode'=>Response::HTTP_NOT_FOUND
            ]);
        }

        if($e instanceof QueryException){
            switch($e->getCode())
            {
                case 2002:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_connection_error, 
                        'errMsg'=> __('auth.cantConnectToLocalMySQL'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;
                
                case 2003:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_conn_host_error, 
                        'errMsg'=> __('auth.cantConnectToMySQLServer'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;

                case 2005:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_unknown_host, 
                        'errMsg'=> __('auth.unknownMySQLHost'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;
                
                case 2006:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_server_gone_error, 
                        'errMsg'=> __('auth.mySQLServerGoneAway'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;

                case 2008:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_out_of_memory, 
                        'errMsg'=> __('auth.mySQLRanOutMemory'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;
                
                case 2013:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_server_lost, 
                        'errMsg'=> __('auth.lostConnectionToMySQLQuery'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;
                
                default:
                    return ApiSendingErrorException::sendingError([
                        'errNo'=> ApiErrorNumbers::$cr_unknown_error, 
                        'errMsg'=> __('auth.unknownMySQLError'), 
                        'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
                    ]);
                    break;
            }
        }

        return parent::render($request, $e);
    }
}
