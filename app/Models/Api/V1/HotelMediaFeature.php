<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMediaFeature
 * 
 * @property int $hotel_media_feature_id
 * @property int|null $media_id
 * @property int|null $hotel_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class HotelMediaFeature extends Model
{
	protected $table = 'hotel_media_feature';
	protected $primaryKey = 'hotel_media_feature_id';
	public $timestamps = false;

	protected $casts = [
		'media_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'media_id',
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
