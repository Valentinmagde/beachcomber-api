<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCardSite
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $hotel_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class HotelPackageRmMealRateCardSite extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card_site';
	public $timestamps = false;

	protected $casts = [
		'meal_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'meal_id',
		'hotel_id',
		'assigned_date'
	];
}
