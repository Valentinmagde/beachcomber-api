<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomMinimumStayMarket
 * 
 * @property int $id
 * @property int|null $room_minimum_stay_id
 * @property int|null $market_id
 *
 * @package App\Models
 */
class RoomMinimumStayMarket extends Model
{
	protected $table = 'room_minimum_stay_market';
	public $timestamps = false;

	protected $casts = [
		'room_minimum_stay_id' => 'int',
		'market_id' => 'int'
	];

	protected $fillable = [
		'room_minimum_stay_id',
		'market_id'
	];
}
