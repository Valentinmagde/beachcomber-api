<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderToImage
 * 
 * @property int $sliderImageid
 * @property int $slider_id
 * @property int $image_id
 * @property string $folder_location
 * @property int $order_by
 *
 * @package App\Models
 */
class SliderToImage extends Model
{
	protected $table = 'slider_to_image';
	protected $primaryKey = 'sliderImageid';
	public $timestamps = false;

	protected $casts = [
		'slider_id' => 'int',
		'image_id' => 'int',
		'order_by' => 'int'
	];

	protected $fillable = [
		'slider_id',
		'image_id',
		'folder_location',
		'order_by'
	];
}
