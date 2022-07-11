<?php
namespace App\Http\Helpers;

class HelperFunctions
{   
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => self::unsetProperty(auth()->user(), 'user_password')
        ]);
    }

    /**
     * Unset property from object
     * 
     * @param $object
     * @param $property
     * @return $objet
     */
    public static function unsetProperty($object, $property)
    {
        unset($object->$property);

        return $object;
    }
}