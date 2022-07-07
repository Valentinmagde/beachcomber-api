<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelTripadvisorRating
 * 
 * @property int $id
 * @property int|null $hotel_id
 * @property int|null $property_id
 * @property float|null $rating
 * @property int|null $rating_num
 * @property string|null $rating_image
 * @property string|null $subratings
 * @property Carbon|null $created
 * @property Carbon $updated
 * @property string $link
 * @property bool|null $status
 *
 * @package App\Models
 */
class HotelTripadvisorRating extends Model
{
	protected $table = 'hotel_tripadvisor_rating';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'property_id' => 'int',
		'rating' => 'float',
		'rating_num' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'hotel_id',
		'property_id',
		'rating',
		'rating_num',
		'rating_image',
		'subratings',
		'created',
		'updated',
		'link',
		'status'
	];
}
