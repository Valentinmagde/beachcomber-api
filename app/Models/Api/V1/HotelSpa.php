<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelSpa
 * 
 * @property int $hotel_spa_id
 * @property int $spa_id
 * @property int $hotel_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelSpa extends Model
{
	protected $table = 'hotel_spa';
	protected $primaryKey = 'hotel_spa_id';
	public $timestamps = false;

	protected $casts = [
		'spa_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'spa_id',
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
