<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomMinimumStayCountry
 * 
 * @property int $id
 * @property int|null $room_minimum_stay_id
 * @property int|null $country_id
 *
 * @package App\Models
 */
class RoomMinimumStayCountry extends Model
{
	protected $table = 'room_minimum_stay_country';
	public $timestamps = false;

	protected $casts = [
		'room_minimum_stay_id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'room_minimum_stay_id',
		'country_id'
	];
}
