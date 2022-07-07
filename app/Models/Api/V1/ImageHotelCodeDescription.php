<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImageHotelCodeDescription
 * 
 * @property int $image_hotel_code_desc_id
 * @property int $image_hotel_code_id
 * @property string $image_code
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class ImageHotelCodeDescription extends Model
{
	protected $table = 'image_hotel_code_description';
	protected $primaryKey = 'image_hotel_code_desc_id';
	public $timestamps = false;

	protected $casts = [
		'image_hotel_code_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'image_hotel_code_id',
		'image_code',
		'description',
		'language_id'
	];
}
