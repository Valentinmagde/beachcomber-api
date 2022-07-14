<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

 /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Beachcomber Api Documentation",
     *      description="How to use Beachcomber Api",
     *      @OA\SecurityScheme(
     *          securityScheme="bearerAuth",
     *          in="header",
     *          name="bearerAuth",
     *          type="http",
     *          scheme="bearer",
     *          bearerFormat="JWT",
     *      ),
     *      @OA\Contact(
     *          name="Beachcomber",
     *          email="mauricia@beachcomber.com",
     *      ),
     *      @OA\License(
     *          name="Terms and Condition",
     *          url="https://www.beachcomber-hotels.com/fr/terms-conditions",
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Local API Server"
     * ),
     *
     * @OA\Tag(
     *     name="Authentification",
     *     description="API Endpoints of Authentification"
     * )
     * @OA\Tag(
     *     name="User",
     *     description="API Endpoints of User"
     * )
     */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
