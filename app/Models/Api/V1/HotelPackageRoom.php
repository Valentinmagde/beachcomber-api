<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRoom
 * 
 * @property int $hotel_package_room_id
 * @property int|null $hotel_package_id
 * @property int|null $room_id
 *
 * @package App\Models
 */
class HotelPackageRoom extends Model
{
	protected $table = 'hotel_package_room';
	protected $primaryKey = 'hotel_package_room_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_id' => 'int',
		'room_id' => 'int'
	];

	protected $fillable = [
		'hotel_package_id',
		'room_id'
	];
}
