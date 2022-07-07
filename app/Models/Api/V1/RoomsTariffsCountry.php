<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomsTariffsCountry
 * 
 * @property int $id
 * @property int $id_r_tariff
 * @property int $id_country
 * @property int $active
 *
 * @package App\Models
 */
class RoomsTariffsCountry extends Model
{
	protected $table = 'rooms_tariffs_country';
	public $timestamps = false;

	protected $casts = [
		'id_r_tariff' => 'int',
		'id_country' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'id_r_tariff',
		'id_country',
		'active'
	];
}
