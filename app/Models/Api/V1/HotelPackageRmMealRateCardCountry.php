<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCardCountry
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $country_id
 * @property Carbon $assigned_date
 * @property Carbon $applicable_from
 * @property Carbon $applicable_to
 *
 * @package App\Models
 */
class HotelPackageRmMealRateCardCountry extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card_country';
	public $timestamps = false;

	protected $casts = [
		'meal_id' => 'int',
		'country_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];

	protected $fillable = [
		'meal_id',
		'country_id',
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];
}
