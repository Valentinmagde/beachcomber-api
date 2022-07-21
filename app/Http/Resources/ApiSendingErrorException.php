<?php

namespace App\Http\Resources;

use Throwable;
use Illuminate\Http\Response;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\QueryException;

class ApiSendingErrorException extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static function sendingError($request)
    {
        return response()->json([
                'errNo'  => $request['errNo'],
                'errMsg' => $request['errMsg'],
            ],
            $request['statusCode']
        );
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function formatError(Throwable $e)
    {
        if($e instanceof QueryException)
        {
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$integrity_constraint_violation, 
                'errMsg'=>$e->errorInfo[2], 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
        else {
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$generic_error, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }
}
