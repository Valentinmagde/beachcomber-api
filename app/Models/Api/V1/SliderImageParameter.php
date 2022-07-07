<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderImageParameter
 * 
 * @property int $image_parameter_id
 * @property int $image_id
 * @property string $image_parameter
 * @property string $image_parameter_value
 *
 * @package App\Models
 */
class SliderImageParameter extends Model
{
	protected $table = 'slider_image_parameter';
	protected $primaryKey = 'image_parameter_id';
	public $timestamps = false;

	protected $casts = [
		'image_id' => 'int'
	];

	protected $fillable = [
		'image_id',
		'image_parameter',
		'image_parameter_value'
	];
}
