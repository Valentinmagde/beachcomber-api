<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteRoomRequest
 * 
 * @property int $quote_room_request_id
 * @property int $quote_id
 * @property int $hotel_id
 * @property int $room_id
 * @property int|null $is_main
 *
 * @package App\Models
 */
class QuoteRoomRequest extends Model
{
	protected $table = 'quote_room_request';
	protected $primaryKey = 'quote_room_request_id';
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'int',
		'hotel_id' => 'int',
		'room_id' => 'int',
		'is_main' => 'int'
	];

	protected $fillable = [
		'quote_id',
		'hotel_id',
		'room_id',
		'is_main'
	];
}
