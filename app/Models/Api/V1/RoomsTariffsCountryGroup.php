<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomsTariffsCountryGroup
 * 
 * @property int $id
 * @property int $id_r_tariff
 * @property int $id_group
 * @property int $active
 *
 * @package App\Models
 */
class RoomsTariffsCountryGroup extends Model
{
	protected $table = 'rooms_tariffs_country_group';
	public $timestamps = false;

	protected $casts = [
		'id_r_tariff' => 'int',
		'id_group' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'id_r_tariff',
		'id_group',
		'active'
	];
}
