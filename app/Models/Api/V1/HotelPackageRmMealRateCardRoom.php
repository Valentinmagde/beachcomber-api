<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCardRoom
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $room_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class HotelPackageRmMealRateCardRoom extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card_room';
	public $timestamps = false;

	protected $casts = [
		'meal_id' => 'int',
		'room_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'meal_id',
		'room_id',
		'assigned_date'
	];
}
