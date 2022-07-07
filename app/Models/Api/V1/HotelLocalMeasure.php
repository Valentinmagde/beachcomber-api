<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelLocalMeasure
 * 
 * @property int $local_measure_id
 * @property int|null $hotel_id
 * @property string|null $desktop_id
 * @property string|null $mobile_id
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class HotelLocalMeasure extends Model
{
	protected $table = 'hotel_local_measure';
	protected $primaryKey = 'local_measure_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'hotel_id',
		'desktop_id',
		'mobile_id',
		'created'
	];
}
