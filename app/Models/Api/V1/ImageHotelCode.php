<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ImageHotelCode
 * 
 * @property int $image_hotel_code_id
 * @property int $hotel_id
 * @property int $country_id
 * @property string $image_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ImageHotelCode extends Model
{
	protected $table = 'image_hotel_code';
	protected $primaryKey = 'image_hotel_code_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'country_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'country_id',
		'image_code',
		'valid_from',
		'valid_to'
	];
}
