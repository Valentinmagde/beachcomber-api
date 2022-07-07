<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRoom
 * 
 * @property int $offer_room_id
 * @property int|null $offer_id
 * @property int|null $room_id
 *
 * @package App\Models
 */
class OfferRoom extends Model
{
	protected $table = 'offer_room';
	protected $primaryKey = 'offer_room_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'room_id' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'room_id'
	];
}
