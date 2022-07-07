<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotelweddate
 * 
 * @property int $hotel_wed_dates_id
 * @property int $hotel_id
 * @property Carbon $wed_date
 * @property int $wed_type_id
 * @property string $wed_status
 * @property Carbon $timestamp
 *
 * @package App\Models
 */
class Hotelweddate extends Model
{
	protected $table = 'hotelweddate';
	protected $primaryKey = 'hotel_wed_dates_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'wed_type_id' => 'int'
	];

	protected $dates = [
		'wed_date',
		'timestamp'
	];

	protected $fillable = [
		'hotel_id',
		'wed_date',
		'wed_type_id',
		'wed_status',
		'timestamp'
	];
}
