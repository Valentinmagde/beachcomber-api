<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientAccountGdpr18
 * 
 * @property int $customer_login_id
 * @property int $customer_id
 * @property string $username
 * @property string $password
 * @property Carbon $last_login_date
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ClientAccountGdpr18 extends Model
{
	protected $table = 'client_account_gdpr18';
	protected $primaryKey = 'customer_login_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $dates = [
		'last_login_date',
		'valid_from',
		'valid_to'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'customer_id',
		'username',
		'password',
		'last_login_date',
		'valid_from',
		'valid_to'
	];
}
