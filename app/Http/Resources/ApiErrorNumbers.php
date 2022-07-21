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
    public static $cr_unknown_error = 251;
    public static $cr_connection_error = 252;
    public static $cr_conn_host_error = 253;
    public static $cr_unknown_host = 254;
    public static $cr_server_gone_error = 255;
    public static $cr_out_of_memory = 256;
    public static $cr_server_lost = 257;
    public static $integrity_constraint_violation = 258;
    public static $generic_error = 259;
   
}