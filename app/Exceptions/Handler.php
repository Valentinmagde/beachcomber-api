<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;
use Illuminate\Http\Response;
use App\Http\Resources\ApiSendingErrorException;
use App\Http\Resources\ApiErrorNumbers;

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
        return parent::render($request, $e);
    }
}
