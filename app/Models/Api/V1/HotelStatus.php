<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelStatus
 * 
 * @property int $hotel_status_id
 * @property int|null $hotel_id
 * @property int|null $status_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class HotelStatus extends Model
{
	protected $table = 'hotel_status';
	protected $primaryKey = 'hotel_status_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'status_id',
		'valid_from',
		'valid_to'
	];
}
