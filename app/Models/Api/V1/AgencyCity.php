<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyCity
 * 
 * @property int $city_id
 * @property int $country_id
 * @property string $city
 * @property int $active
 *
 * @package App\Models
 */
class AgencyCity extends Model
{
	protected $table = 'agency_city';
	protected $primaryKey = 'city_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'country_id',
		'city',
		'active'
	];
}
