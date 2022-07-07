<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomMinimumStayAgency
 * 
 * @property int $id
 * @property int|null $room_minimum_stay_id
 * @property int|null $agency_id
 *
 * @package App\Models
 */
class RoomMinimumStayAgency extends Model
{
	protected $table = 'room_minimum_stay_agency';
	public $timestamps = false;

	protected $casts = [
		'room_minimum_stay_id' => 'int',
		'agency_id' => 'int'
	];

	protected $fillable = [
		'room_minimum_stay_id',
		'agency_id'
	];
}
