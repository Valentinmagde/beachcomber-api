<?php

namespace App\Http\Resources;

class ApiErrorNumbers
{
    public static $validator = 6;
    public static $bad_login_credentials = 7;
    public static $invalid_token = 11;
    public static $expired_token = 12;
    public static $blacklisted_token = 13;
    public static $token_not_found = 14;
    public static $resource_not_found = 26;
    public static $not_allowed_method = 31;
}