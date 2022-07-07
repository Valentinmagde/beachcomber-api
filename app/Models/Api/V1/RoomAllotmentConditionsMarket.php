<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentConditionsMarket
 * 
 * @property int $id
 * @property int|null $allotment_id
 * @property int|null $market_id
 * @property int|null $active
 *
 * @package App\Models
 */
class RoomAllotmentConditionsMarket extends Model
{
	protected $table = 'room_allotment_conditions_market';
	public $timestamps = false;

	protected $casts = [
		'allotment_id' => 'int',
		'market_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'allotment_id',
		'market_id',
		'active'
	];
}
