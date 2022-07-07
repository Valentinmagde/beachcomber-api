<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantMedia
 * 
 * @property int $restaurant_image_id
 * @property int $restaurant_id
 * @property string $restaurant_media_name
 * @property string $restaurant_media_title
 * @property string $restaurant_media_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int|null $sort
 *
 * @package App\Models
 */
class RestaurantMedia extends Model
{
	protected $table = 'restaurant_media';
	protected $primaryKey = 'restaurant_image_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_id' => 'int',
		'sort' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'restaurant_id',
		'restaurant_media_name',
		'restaurant_media_title',
		'restaurant_media_path',
		'valid_from',
		'valid_to',
		'sort'
	];
}
