<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiSendingResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function sendingResponse($request)
    {
        return response()->json([
                'successMsg'  => $request['successMsg'],
                'data' => $request['data']? $request['data']: null,
            ],
            $request['statusCode']
        );
    }
}
