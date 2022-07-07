<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelAmenity
 * 
 * @property int $hotel_amenity_id
 * @property int $hotel_id
 * @property int $amenity_id
 * @property int $amenity_sub_type_id
 * @property int $is_featured
 * @property int $rank
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelAmenity extends Model
{
	protected $table = 'hotel_amenity';
	protected $primaryKey = 'hotel_amenity_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'amenity_id' => 'int',
		'amenity_sub_type_id' => 'int',
		'is_featured' => 'int',
		'rank' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'amenity_id',
		'amenity_sub_type_id',
		'is_featured',
		'rank',
		'valid_from',
		'valid_to'
	];
}
