<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CpUserCookieSettingsLog
 * 
 * @property int $User_Cookie_Setting_Log_ID
 * @property string $User_Cookie_Setting_ID
 * @property string $ip_address
 * @property string $action_alias
 * @property string|null $remarks
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class CpUserCookieSettingsLog extends Model
{
	protected $table = 'cp_user_cookie_settings_log';
	protected $primaryKey = 'User_Cookie_Setting_Log_ID';

	protected $fillable = [
		'User_Cookie_Setting_ID',
		'ip_address',
		'action_alias',
		'remarks'
	];
}
