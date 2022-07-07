<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmChildAge
 * 
 * @property int $id
 * @property string $name
 * @property string $meal_rate_name
 * @property string $child_rate_name
 * @property int $default
 * @property int $type
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmChildAge extends Model
{
	protected $table = 'tariff_rm_child_age';
	public $timestamps = false;

	protected $casts = [
		'default' => 'int',
		'type' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'meal_rate_name',
		'child_rate_name',
		'default',
		'type',
		'active'
	];
}
