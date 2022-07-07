<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCardReseller
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $reseller_id
 * @property Carbon $assigned_date
 * @property Carbon $applicable_from
 * @property Carbon $applicable_to
 *
 * @package App\Models
 */
class HotelPackageRmMealRateCardReseller extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card_reseller';
	public $timestamps = false;

	protected $casts = [
		'meal_id' => 'int',
		'reseller_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];

	protected $fillable = [
		'meal_id',
		'reseller_id',
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];
}
