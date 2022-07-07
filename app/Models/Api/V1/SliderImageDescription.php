<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderImageDescription
 * 
 * @property int $image_description_id
 * @property int $image_id
 * @property int $language_id
 * @property string $alt
 * @property string $caption
 * @property string $filename
 *
 * @package App\Models
 */
class SliderImageDescription extends Model
{
	protected $table = 'slider_image_description';
	protected $primaryKey = 'image_description_id';
	public $timestamps = false;

	protected $casts = [
		'image_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'image_id',
		'language_id',
		'alt',
		'caption',
		'filename'
	];
}
