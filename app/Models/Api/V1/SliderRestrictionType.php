<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderRestrictionType
 * 
 * @property float|null $ID
 * @property string|null $name
 * @property Carbon $created
 *
 * @package App\Models
 */
class SliderRestrictionType extends Model
{
	protected $table = 'slider_restriction_type';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'float'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'ID',
		'name',
		'created'
	];
}
