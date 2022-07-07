<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelSport
 * 
 * @property int $hotel_sport_id
 * @property int $sport_id
 * @property int $hotel_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelSport extends Model
{
	protected $table = 'hotel_sport';
	protected $primaryKey = 'hotel_sport_id';
	public $timestamps = false;

	protected $casts = [
		'sport_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'sport_id',
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
