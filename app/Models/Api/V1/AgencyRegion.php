<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyRegion
 * 
 * @property int $region_id
 * @property int $country_id
 * @property string $region
 * @property int $active
 *
 * @package App\Models
 */
class AgencyRegion extends Model
{
	protected $table = 'agency_region';
	protected $primaryKey = 'region_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'country_id',
		'region',
		'active'
	];
}
