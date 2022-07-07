<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderImageRestriction
 * 
 * @property float $ID
 * @property float|null $image_ID
 * @property float|null $Restriction_Type_ID
 * @property float|null $value
 * @property string|null $value_type
 * @property Carbon $created
 *
 * @package App\Models
 */
class SliderImageRestriction extends Model
{
	protected $table = 'slider_image_restriction';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'image_ID' => 'float',
		'Restriction_Type_ID' => 'float',
		'value' => 'float'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'image_ID',
		'Restriction_Type_ID',
		'value',
		'value_type',
		'created'
	];
}
