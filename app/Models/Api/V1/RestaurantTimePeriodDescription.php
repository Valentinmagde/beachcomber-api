<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantTimePeriodDescription
 * 
 * @property int $time_period_desc_id
 * @property int $time_period_id
 * @property int|null $language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class RestaurantTimePeriodDescription extends Model
{
	protected $table = 'restaurant_time_period_description';
	protected $primaryKey = 'time_period_desc_id';
	public $timestamps = false;

	protected $casts = [
		'time_period_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'time_period_id',
		'language_id',
		'description'
	];
}
