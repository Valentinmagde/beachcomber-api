<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyGeneralCondition
 * 
 * @property int $condition_id
 * @property int $country_id
 * @property float $room_rate_percentage
 * @property float $meal_rate_percentage
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class AgencyGeneralCondition extends Model
{
	protected $table = 'agency_general_conditions';
	protected $primaryKey = 'condition_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'room_rate_percentage' => 'float',
		'meal_rate_percentage' => 'float'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'country_id',
		'room_rate_percentage',
		'meal_rate_percentage',
		'valid_from',
		'valid_to'
	];
}
