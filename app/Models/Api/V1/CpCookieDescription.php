<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CpCookieDescription
 * 
 * @property int $Cookie_Description_ID
 * @property int $Cookie_ID
 * @property int $Language_ID
 * @property string $cookie_purpose
 * @property string $cookie_lifetime
 * @property int $created_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class CpCookieDescription extends Model
{
	protected $table = 'cp_cookie_description';
	protected $primaryKey = 'Cookie_Description_ID';

	protected $casts = [
		'Cookie_ID' => 'int',
		'Language_ID' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'Cookie_ID',
		'Language_ID',
		'cookie_purpose',
		'cookie_lifetime',
		'created_by'
	];
}
