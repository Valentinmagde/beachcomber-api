<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCardSource
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $source_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class HotelPackageRmMealRateCardSource extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card_source';
	public $timestamps = false;

	protected $casts = [
		'meal_id' => 'int',
		'source_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'meal_id',
		'source_id',
		'assigned_date'
	];
}
