<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmRoom
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $room_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class OfferRmRoom extends Model
{
	protected $table = 'offer_rm_room';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'room_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'offer_id',
		'room_id',
		'assigned_date'
	];
}
