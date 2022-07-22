<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\V1\HotelService;
use App\Http\Resources\ApiSendingErrorException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Resources\ApiErrorNumbers;

class HotelController extends Controller
{
    /**
     * Create a new HotelController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.verify', []);
    }

    /**
     * @OA\Get(
     *      path="/api/v1/{lang}/hotels",
     *      operationId="hotelIndex",
     *      tags={"Hotels"},
     *      summary="Get all hotels",
     *      description="Returns all hotels",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Hotels successfully collects",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *                @OA\Property(property="data", type="array",
     *                    @OA\Items(
     *                        @OA\Property(property="hotel_id", type="integer", example="number"),
     *                        @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *                    ),
     *                ),
     *           ),
     *       ),
     *       security={
     *         {"bearer": {}}
     *       },
     *       @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *    ),
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HotelService::getAll();
    }

    /**
     * @OA\Post(
     *      path="/api/v1/{lang}/hotels",
     *      operationId="hotelStore",
     *      tags={"Hotels"},
     *      summary="Store a hotel",
     *      description="Store a hotel",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "type", "postal_street", "postal_city", "tel", "	fax", 
     *                          "url", "check_in", "check_out", "order_id", "menu_order_id",
     *                          "video_code", "pms_property_code", "site_url", "latitude",
     *                          "longitude", "facebook_url", "googleplus_url"},
     *               @OA\Property(property="country_id", type="integer", example="number"),
     *               @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *            ),
     *        ),
     *       @OA\MediaType(
     *            mediaType="application/json",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "type", "postal_street", "postal_city", "tel", "	fax", 
     *                          "url", "check_in", "check_out", "order_id", "menu_order_id",
     *                          "video_code", "pms_property_code", "site_url", "latitude",
     *                          "longitude", "facebook_url", "googleplus_url"},
     *               @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Hotel created successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *                @OA\Property(property="data", type="array",
     *                    @OA\Items(
     *                        @OA\Property(property="hotel_id", type="integer", example="number"),
     *                        @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *                    ),
     *                ),
     *           ),
     *       ),
     *       security={
     *         {"bearer": {}}
     *       },
     *       @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *    ),
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"              => 'required', 
            "type"              => 'required', 
            "postal_street"     => 'required', 
            "postal_city"       => 'required', 
            "tel"               => 'required', 
            "fax"               => 'required', 
            "url"               => 'required', 
            "check_in"          => 'required', 
            "check_out"         => 'required', 
            "order_id"          => 'required', 
            "menu_order_id"     => 'required',
            "video_code"        => 'required', 
            "pms_property_code" => 'required', 
            "site_url"          => 'required', 
            "latitude"          => 'required',
            "longitude"         => 'required', 
            "facebook_url"      => 'required', 
            "googleplus_url"    => 'required'
        ]);

        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$validator, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return HotelService::store($request->all());
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/{lang}/hotel/{hotelId}",
     *      operationId="hotelShowById",
     *      tags={"Hotels"},
     *      summary="Get hotel by id",
     *      description="Get by id here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="hotelId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="Hotel successfully collects",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="hotel_id", type="integer", example="number"),
     *                        @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *               ),
     *             )
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * Display the specified resource.
     *
     * @param  int  $locale
     * @param  int  $hotelId
     * @return \Illuminate\Http\Response
     */
    public function showById($locale, $hotelId)
    {
        return HotelService::getById($hotelId);
    }

    /**
     *   @OA\Put(
     *      path="/api/v1/{lang}/hotel/{hotelId}",
     *      operationId="hotelUpdate",
     *      tags={"Hotels"},
     *      summary="update hote; by id",
     *      description="update by id here",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="hotelId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "type", "postal_street", "postal_city", "tel", "	fax", 
     *                          "url", "check_in", "check_out", "order_id", "menu_order_id",
     *                          "video_code", "pms_property_code", "site_url", "latitude",
     *                          "longitude", "facebook_url", "googleplus_url"},
     *               @OA\Property(property="country_id", type="integer", example="number"),
     *               @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *            ),
     *        ),
     *       @OA\MediaType(
     *            mediaType="application/json",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "type", "postal_street", "postal_city", "tel", "	fax", 
     *                          "url", "check_in", "check_out", "order_id", "menu_order_id",
     *                          "video_code", "pms_property_code", "site_url", "latitude",
     *                          "longitude", "facebook_url", "googleplus_url"},
     *               @OA\Property(property="country_id", type="integer", example="number"),
     *               @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *            ),
     *        ),
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=204,
     *          description="hotel updated successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="hotel_id", type="integer", example="number"),
     *                        @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *               ),
     *           ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string")
     *          )
     *       ),
     * )
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "name"              => 'required', 
            "type"              => 'required', 
            "postal_street"     => 'required', 
            "postal_city"       => 'required', 
            "tel"               => 'required', 
            "fax"               => 'required', 
            "url"               => 'required', 
            "check_in"          => 'required', 
            "check_out"         => 'required', 
            "order_id"          => 'required', 
            "menu_order_id"     => 'required',
            "video_code"        => 'required', 
            "pms_property_code" => 'required', 
            "site_url"          => 'required', 
            "latitude"          => 'required',
            "longitude"         => 'required', 
            "facebook_url"      => 'required', 
            "googleplus_url"    => 'required'
        ]);

        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$validator, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return HotelService::update($request->all());
    }

    /**
     *   @OA\Post(
     *      path="/api/v1/{lang}/hotel/{hotelId}/image",
     *      operationId="hotelUploadImage",
     *      tags={"Hotels"},
     *      summary="Upload Image",
     *      description="Upload Image",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="hotelId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"image"},
     *               @OA\Property(property="default_image", type="file", example="file")
     *            ),
     *        ),
     *    ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="Image uploaded successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="hotel_id", type="integer", example="number"),
     *                        @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *               ),
     *             )
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * 
     * Display the specified resource.
     *
     * @param  int  $hotelId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request, $locale, $hotelId)
    {
        $validator = Validator::make($request->all(), [
            'default_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$validator, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return HotelService::uploadImage($request->file('default_image'), $hotelId);
    }

    /**
     *   @OA\Post(
     *      path="/api/v1/{lang}/hotel/{hotelId}/logo",
     *      operationId="hotelUploadLogo",
     *      tags={"Hotels"},
     *      summary="Upload Logo",
     *      description="Upload Logo",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="hotelId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"logo"},
     *               @OA\Property(property="doc_logo", type="file", example="file")
     *            ),
     *        ),
     *    ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="Logo uploaded successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object",
     *                   @OA\Property(property="hotel_id", type="integer", example="number"),
     *                        @OA\Property(property="country_id", type="integer", example="number"),
     *                        @OA\Property(property="region_id", type="integer", example="number"),
     *                        @OA\Property(property="rating_id", type="integer", example="number"),
     *                        @OA\Property(property="name", type="string", example="string"),
     *                        @OA\Property(property="type", type="string", example="string"),
     *                        @OA\Property(property="postal_street", type="string", example="string"),
     *                        @OA\Property(property="postal_city", type="string", example="string"),
     *                        @OA\Property(property="tel", type="string", example="string"),
     *                        @OA\Property(property="fax", type="string", example="string"),
     *                        @OA\Property(property="url", type="string", example="string"),
     *                        @OA\Property(property="check_in", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="check_out", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="status", type="integer", example="number"),
     *                        @OA\Property(property="valid_from", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="valid_to", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="thumb_image", type="string", example="string"),
     *                        @OA\Property(property="default_image", type="string", example="string"),
     *                        @OA\Property(property="order_id", type="integer", example="number"),
     *                        @OA\Property(property="menu_order_id", type="integer", example="number"),
     *                        @OA\Property(property="hotel_code", type="string", example="string"),
     *                        @OA\Property(property="video_code", type="string", example="string"),
     *                        @OA\Property(property="pms_property_code", type="integer", example="integer"),
     *                        @OA\Property(property="rm_code", type="string", example="string"),
     *                        @OA\Property(property="has_villa", type="integer", example="integer"),
     *                        @OA\Property(property="has_golf", type="integer", example="integer"),
     *                        @OA\Property(property="is_hotel", type="integer", example="integer"),
     *                        @OA\Property(property="on_wedding_calendar", type="integer", example="integer"),
     *                        @OA\Property(property="site_url", type="string", example="string"),
     *                        @OA\Property(property="asterix_id", type="integer", example="integer"),
     *                        @OA\Property(property="latitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="longitude", type="date", example="2022-07-22T14:00:00.000000Z"),
     *                        @OA\Property(property="facebook_url", type="string", example="string"),
     *                        @OA\Property(property="googleplus_url", type="string", example="string"),
     *                        @OA\Property(property="reviewpro_script_url", type="string", example="string"),
     *                        @OA\Property(property="doc_logo", type="string", example="string"),
     *                        @OA\Property(property="status_report_order", type="integer", example="integer"),
     *                        @OA\Property(property="on_status_report", type="integer", example="integer"),
     *                        @OA\Property(property="wihp_id", type="integer", example="integer"),
     *                        @OA\Property(property="ratetiger_code", type="integer", example="integer")
     *               ),
     *             ),
     *       ),
     *      @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     * )
     * 
     * Display the specified resource.
     *
     * @param  int  $hotelId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadLogo(Request $request, $locale, $hotelId)
    {
        $validator = Validator::make($request->all(), [
            'default_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            $error = implode(",", $validator->errors()->all());
            return ApiSendingErrorException::sendingError([
                'errNo'=>ApiErrorNumbers::$validator, 
                'errMsg'=>$error, 
                'statusCode'=>Response::HTTP_BAD_REQUEST
            ]);
        }

        return HotelService::uploadLogo($request->file('doc_logo'), $hotelId);
    }

    /**
     * @OA\Delete(
     *      path="/api/v1/{lang}/hotel/{hotelId}",
     *      operationId="hotelDestroy",
     *      tags={"Hotels"},
     *      summary="Delete hotel",
     *      description="Delete hotel",
     *      @OA\Parameter(
     *          name="lang",
     *          in="path",
     *          required=true,
     *          example="en",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="hotelId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      security={
     *         {"bearer": {}}
     *       },
     *      @OA\Response(
     *          response=200,
     *          description="hotel deleted successfully",
     *          @OA\JsonContent(
     *               @OA\Property(property="successMsg", type="string", example="string"),
     *               @OA\Property(property="data", type="object", example="null")
     *            ),
     *       ),
     *       @OA\Response(
     *           response=400, 
     *           description="Bad request",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=401, 
     *           description="Unauthorized",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *       @OA\Response(
     *           response=404, 
     *           description="Resource Not Found",
     *           @OA\JsonContent(
     *               @OA\Property(property="errNo", type="integer", example="number"),
     *               @OA\Property(property="errMsg", type="string", example="string"),
     *          )
     *       ),
     *    ),
     * Remove the specified resource from storage.
     *
     * @param  string  $locale
     * @param  int  $hotelId
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $hotelId)
    {
        return HotelService::destroy($hotelId);
    }
}
