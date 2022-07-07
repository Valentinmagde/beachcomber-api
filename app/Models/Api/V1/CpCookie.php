<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CpCookie
 * 
 * @property int $Cookie_ID
 * @property string $cookie_alias
 * @property int $Cookie_Type_ID
 * @property int $Cookie_Domain_ID
 * @property int $created_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class CpCookie extends Model
{
	protected $table = 'cp_cookie';
	protected $primaryKey = 'Cookie_ID';

	protected $casts = [
		'Cookie_Type_ID' => 'int',
		'Cookie_Domain_ID' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'cookie_alias',
		'Cookie_Type_ID',
		'Cookie_Domain_ID',
		'created_by'
	];
}
