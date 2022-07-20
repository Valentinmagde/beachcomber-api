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
use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

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
	use HasFactory, Notifiable, SoftDeletes;

	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     */
    protected $hidden = [
        'user_password'
    ];

	protected $casts = [
		'user_id' => 'int'
	];

    protected $attributes = [
        'user_id' => 0,
		'user_type_id' => 0,
        'user_group_id' => 0,
        'user_surname' => 0,
        'user_othername' => 0,
        'user_email' => 0,
        'user_jobtitle' => 'NA',
        'user_phone' => '+230 601 9000',
        'user_name' => 0,
        'active' => 0,
        'avatar' => null,
        'deleted_at' => null
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

    /**
     * /--------------------------------------------------------------------------------
     * / JWT Functions
     * /--------------------------------------------------------------------------------
    */

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
