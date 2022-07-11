<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiSendingErrorException extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function sendingError($request)
    {
        return response()->json([
                'errNo'  => $request['errNo'],
                'errMsg' => $request['errMsg'],
            ],
            $request['statusCode']
        );
    }
}
