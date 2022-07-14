<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Api\V1;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Http\Resources\ApiSendingErrorException;
use App\Http\Resources\ApiSendingResponse;
use App\Http\Helpers\HelperFunctions;
use Illuminate\Http\Response;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $user_id
 * @property int $user_type_id
 * @property int $user_group_id
 * @property string $user_surname
 * @property string $user_othername
 * @property string $user_email
 * @property string $user_jobtitle
 * @property string $user_phone
 * @property string $user_name
 * @property string $user_password
 * @property int $active
 * 
 * @package App\Models
 */
class User extends Authenticatable implements JWTSubject
{
	use HasFactory, Notifiable;

	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_type_id',
        'user_group_id',
        'user_surname',
        'user_othername',
        'user_email',
        'user_jobtitle',
        'user_phone',
        'user_name',
        'user_password',
        'active'
	];
    // ------------------------------------------------------------------------------------------
    // @ Accessors
    // ------------------------------------------------------------------------------------------
    /**
     * Getter
     */
    public static function getById($id)
    {
        try{
            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'Successful operation',
                'data'=>HelperFunctions::unsetProperty(User::find($id), 'user_password'), 
                'statusCode'=>Response::HTTP_OK
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>7, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
       
    }
    
    // ------------------------------------------------------------------------------------------
    // @ Publics methods
    // ------------------------------------------------------------------------------------------

    /**
     * Store user
     * 
     * @param $data
     * 
     * @return $user
     */
    public function store($data)
    {
        try{
            $data['user_password'] = bcrypt($data['user_password']);
            $user = User::create($data);

            return ApiSendingResponse::sendingResponse([
                'successMsg'=>'User created successfully',
                'data'=>HelperFunctions::unsetProperty(User::find($user->user_id), 'user_password'), 
                'statusCode'=>Response::HTTP_CREATED
            ]);
        }catch(\Exception $e){
            return ApiSendingErrorException::sendingError([
                'errNo'=>7, 
                'errMsg'=>$e->getMessage(), 
                'statusCode'=>Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        } 
    }

	/**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getAuthPassword(){
        return $this->user_password;
    }
}
