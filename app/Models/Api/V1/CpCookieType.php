<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CpCookieType
 * 
 * @property int $Cookie_Type_ID
 * @property string $cookie_type_alias
 * @property string|null $cookie_type_term_alias
 * @property int $created_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class CpCookieType extends Model
{
	protected $table = 'cp_cookie_type';
	protected $primaryKey = 'Cookie_Type_ID';

	protected $casts = [
		'created_by' => 'int'
	];

	protected $fillable = [
		'cookie_type_alias',
		'cookie_type_term_alias',
		'created_by'
	];
}
