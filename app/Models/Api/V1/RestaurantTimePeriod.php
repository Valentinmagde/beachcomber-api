<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantTimePeriod
 * 
 * @property int $time_period_id
 * @property string|null $name
 * @property bool|null $active
 *
 * @package App\Models
 */
class RestaurantTimePeriod extends Model
{
	protected $table = 'restaurant_time_period';
	protected $primaryKey = 'time_period_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool'
	];

	protected $fillable = [
		'name',
		'active'
	];
}
