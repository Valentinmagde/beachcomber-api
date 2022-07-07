<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelFacility
 * 
 * @property int $hotel_facility_id
 * @property int $facility_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelFacility extends Model
{
	protected $table = 'hotel_facility';
	protected $primaryKey = 'hotel_facility_id';
	public $timestamps = false;

	protected $casts = [
		'facility_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'facility_id',
		'valid_from',
		'valid_to'
	];
}
