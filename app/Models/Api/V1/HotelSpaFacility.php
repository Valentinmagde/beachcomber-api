<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelSpaFacility
 * 
 * @property int $hotel_spa_facility_id
 * @property int $hotel_spa_id
 * @property int $facility_id
 * @property int $quantity
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelSpaFacility extends Model
{
	protected $table = 'hotel_spa_facility';
	protected $primaryKey = 'hotel_spa_facility_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_spa_id' => 'int',
		'facility_id' => 'int',
		'quantity' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_spa_id',
		'facility_id',
		'quantity',
		'valid_from',
		'valid_to'
	];
}
