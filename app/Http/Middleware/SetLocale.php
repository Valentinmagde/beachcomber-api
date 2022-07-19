<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ApiSendingErrorException;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(3);

        if (!in_array($locale, ['en', 'fr'])) {
            return ApiSendingErrorException::sendingError([
                'errNo'=>7, 
                'errMsg'=>'Language not supported', 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }
        app()->setLocale($request->segment(3));

        return $next($request);
    }
}
