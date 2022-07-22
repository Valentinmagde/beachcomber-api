<?php

namespace App\Services\Api\V1;

use Illuminate\Http\Response;
use App\Models\Api\V1\Hotel;
use App\Http\Helpers\HelperFunctions;
use App\Http\Resources\ApiSendingResponse;
use App\Http\Resources\ApiSendingErrorException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ApiErrorNumbers;
use Illuminate\Database\QueryException;

class HotelService
{   
    // ------------------------------------------------------------------------------------------
    // @ Publics methods
    // ------------------------------------------------------------------------------------------

    /**
     * Get hotel by id
     * 
     * @param $id
     * 
     * @return $hotel
     */
    public static function getById($id)
    {
        try{
            $hotel = Hotel::find($id);

            if(!$hotel)
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found,
                    'errMsg'=> __('hotel.hotelNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            else
                return ApiSendingResponse::sendingResponse([
                    'successMsg'=> __('hotel.successfulOperation'),
                    'data'=>$hotel, 
                    'statusCode'=>Response::HTTP_OK
                ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        }
    }

    /**
     * Get all hotels
     * 
     * @return array of hotels
     */
    public static function getAll()
    {
        try{
            $hotels = Hotel::all();

            return ApiSendingResponse::sendingResponse([
                'successMsg'=>__('hotel.successfulOperation'),
                'data'=> $hotels, 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        }
       
    }

    /**
     * Store a hotel
     * 
     * @param $data
     * 
     * @return $hotel
     */
    public function store($data)
    {
        try{
            $hotel = Hotel::create($data);

            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('hotel.successfullyCreatedHotel'),
                'data'=>$hotel,
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Upload image
     * 
     * @param $hotelId
     * @param $image
     * 
     * @return $hotel
     */
    public function uploadImage($image, $hotelId)
    {
        try{
            $hotel = Hotel::find($hotelId);

            if(!$hotel){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('hotel.hotelNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $hotel->default_image = $this->storeImage($hotel->name, $image, 'images');
            
            // Persist user record to database
            $hotel->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('hotel.imageUploadedSuccessfully'),
                'data'=>$hotel, 
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Upload logo
     * 
     * @param $hotelId
     * @param $logo
     * 
     * @return $hotel
     */
    public function uploadLogo($logo, $hotelId)
    {
        try{
            $hotel = Hotel::find($hotelId);

            if(!$hotel){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('hotel.hotelNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $hotel->doc_logo = $this->storeImage($hotel->name, $logo, 'images');
            
            // Persist user record to database
            $hotel->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('hotel.imageUploadedSuccessfully'),
                'data'=>$hotel, 
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Store image
     */
    public static function storeImage($name, $image, $folder)
    {
        try{
            // Make a image based name on user name and timestamp
            $name = str_slug($name).'_'.time().'.'.$image->getClientOriginalExtension();
            // Define folder path
            $folder = '/uploads/'.$folder;
            // Store image
            $fileFullPath = Storage::disk('public')->putFileAs($folder, $avatar, $name);
            
            return $fileFullPath;
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        }
    }

    /**
     * Update hotel
     * 
     * @param $hotelId
     * @param $data
     * 
     * @return $hotel
     */
    public function update($data, $hotelId)
    {
        try{
            $hotel = Hotel::find($hotelId);

            if(!$hotel){
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('hotel.hotelNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            //Fill user with new data
            // Persist user record to database
            $hotel->fill($data);
            $hotel->save();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('hotel.hotelUpdatedSuccessfully'),
                'data'=>$hotel, 
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }

    /**
     * Delete a hotel
     * 
     * @param $hotelId
     * 
     * @return $hotel
     */
    public function destroy($hotelId)
    {
        try{
            $hotel = Hotel::find($hotelId);

            if(!$hotel)
            {
                return ApiSendingErrorException::sendingError([
                    'errNo'=>ApiErrorNumbers::$resource_not_found, 
                    'errMsg'=> __('hotel.hotelNotExist'), 
                    'statusCode'=>Response::HTTP_NOT_FOUND
                ]);
            }

            $hotel->delete();
            
            return ApiSendingResponse::sendingResponse([
                'successMsg'=> __('hotel.hotelDeletedSuccessfully'),
                'data'=>null, 
                'statusCode'=>Response::HTTP_NO_CONTENT
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::formatError($e);
        } 
    }
}