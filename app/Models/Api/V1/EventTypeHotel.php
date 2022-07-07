<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventTypeHotel
 * 
 * @property int $event_hotel_id
 * @property int|null $hotel_id
 * @property int|null $event_type_id
 * @property Carbon $min_date
 * @property Carbon $max_date
 *
 * @package App\Models
 */
class EventTypeHotel extends Model
{
	protected $table = 'event_type_hotel';
	protected $primaryKey = 'event_hotel_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'event_type_id' => 'int'
	];

	protected $dates = [
		'min_date',
		'max_date'
	];

	protected $fillable = [
		'hotel_id',
		'event_type_id',
		'min_date',
		'max_date'
	];
}
