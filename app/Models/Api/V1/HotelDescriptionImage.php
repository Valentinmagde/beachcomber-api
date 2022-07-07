<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelDescriptionImage
 * 
 * @property int $hotel_desc_image_id
 * @property int $hotel_desc_id
 * @property int $section_id
 * @property int $hotel_id
 * @property string $image_title
 * @property string $image_name
 * @property string $image_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelDescriptionImage extends Model
{
	protected $table = 'hotel_description_image';
	protected $primaryKey = 'hotel_desc_image_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_desc_id' => 'int',
		'section_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_desc_id',
		'section_id',
		'hotel_id',
		'image_title',
		'image_name',
		'image_path',
		'valid_from',
		'valid_to'
	];
}
