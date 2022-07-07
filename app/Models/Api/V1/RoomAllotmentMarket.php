<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentMarket
 * 
 * @property int $id
 * @property int|null $allotment_id
 * @property int|null $market_id
 *
 * @package App\Models
 */
class RoomAllotmentMarket extends Model
{
	protected $table = 'room_allotment_market';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'allotment_id' => 'int',
		'market_id' => 'int'
	];

	protected $fillable = [
		'id',
		'allotment_id',
		'market_id'
	];
}
