<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomsTariffsAgency
 * 
 * @property int $id
 * @property int $id_r_tariff
 * @property int $id_agency
 * @property int $active
 *
 * @package App\Models
 */
class RoomsTariffsAgency extends Model
{
	protected $table = 'rooms_tariffs_agency';
	public $timestamps = false;

	protected $casts = [
		'id_r_tariff' => 'int',
		'id_agency' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'id_r_tariff',
		'id_agency',
		'active'
	];
}
