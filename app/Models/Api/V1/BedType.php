<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BedType
 * 
 * @property int $bed_type_id
 * @property string|null $bed_type
 * @property int $htng_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class BedType extends Model
{
	protected $table = 'bed_type';
	protected $primaryKey = 'bed_type_id';
	public $timestamps = false;

	protected $casts = [
		'htng_code' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'bed_type',
		'htng_code',
		'valid_from',
		'valid_to'
	];
}
