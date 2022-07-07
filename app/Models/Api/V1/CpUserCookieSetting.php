<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CpUserCookieSetting
 * 
 * @property int $User_Cookie_Setting_ID
 * @property string $user_BCH_Session_ID
 * @property string $initial_ip_address
 * @property bool $strict_cookie
 * @property bool $functional_cookie
 * @property bool $analytic_cookie
 * @property bool $commercial_cookie
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class CpUserCookieSetting extends Model
{
	protected $table = 'cp_user_cookie_setting';
	protected $primaryKey = 'User_Cookie_Setting_ID';

	protected $casts = [
		'strict_cookie' => 'bool',
		'functional_cookie' => 'bool',
		'analytic_cookie' => 'bool',
		'commercial_cookie' => 'bool'
	];

	protected $fillable = [
		'user_BCH_Session_ID',
		'initial_ip_address',
		'strict_cookie',
		'functional_cookie',
		'analytic_cookie',
		'commercial_cookie'
	];
}
