<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Constant
 * 
 * @property int $constant_id
 * @property string|null $constant_name
 * @property string|null $constant_value
 * @property string|null $constant_for
 * @property int|null $language_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Constant extends Model
{
	protected $table = 'constant';
	protected $primaryKey = 'constant_id';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'constant_name',
		'constant_value',
		'constant_for',
		'language_id',
		'valid_from',
		'valid_to'
	];
}
