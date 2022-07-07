<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AmenitySubType
 * 
 * @property int $amenity_sub_type_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class AmenitySubType extends Model
{
	protected $table = 'amenity_sub_type';
	protected $primaryKey = 'amenity_sub_type_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to'
	];
}
