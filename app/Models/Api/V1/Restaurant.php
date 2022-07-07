<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurant
 * 
 * @property int $restaurant_id
 * @property string|null $restaurant_type
 * @property int $hotel_id
 * @property int $seat
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string $restaurant_name
 * @property string|null $restaurant_image
 * @property string|null $restaurant_menu
 * @property bool|null $breakfast_start_period_id
 * @property bool|null $breakfast_end_period_id
 * @property bool|null $lunch_start_period_id
 * @property bool|null $lunch_end_period_id
 * @property bool|null $dinner_start_period_id
 * @property bool|null $dinner_end_period_id
 * @property bool|null $bar_start_period_id
 * @property bool|null $bar_end_period_id
 * @property int|null $restaurant_reservation_type
 *
 * @package App\Models
 */
class Restaurant extends Model
{
	protected $table = 'restaurant';
	protected $primaryKey = 'restaurant_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'seat' => 'int',
		'breakfast_start_period_id' => 'bool',
		'breakfast_end_period_id' => 'bool',
		'lunch_start_period_id' => 'bool',
		'lunch_end_period_id' => 'bool',
		'dinner_start_period_id' => 'bool',
		'dinner_end_period_id' => 'bool',
		'bar_start_period_id' => 'bool',
		'bar_end_period_id' => 'bool',
		'restaurant_reservation_type' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'restaurant_type',
		'hotel_id',
		'seat',
		'valid_from',
		'valid_to',
		'restaurant_name',
		'restaurant_image',
		'restaurant_menu',
		'breakfast_start_period_id',
		'breakfast_end_period_id',
		'lunch_start_period_id',
		'lunch_end_period_id',
		'dinner_start_period_id',
		'dinner_end_period_id',
		'bar_start_period_id',
		'bar_end_period_id',
		'restaurant_reservation_type'
	];
}
