<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteRoomRequest
 * 
 * @property float $group_quote_room_request_id
 * @property float|null $quote_id
 * @property float|null $hotel_id
 * @property float|null $room_id
 * @property float|null $is_main
 *
 * @package App\Models
 */
class GroupQuoteRoomRequest extends Model
{
	protected $table = 'group_quote_room_request';
	protected $primaryKey = 'group_quote_room_request_id';
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'float',
		'hotel_id' => 'float',
		'room_id' => 'float',
		'is_main' => 'float'
	];

	protected $fillable = [
		'quote_id',
		'hotel_id',
		'room_id',
		'is_main'
	];
}
