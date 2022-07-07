<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffOccupancy
 * 
 * @property int $tariff_occupancy_id
 * @property string $tariff_occupancy
 * @property int $rm_occupancy_id
 *
 * @package App\Models
 */
class TariffOccupancy extends Model
{
	protected $table = 'tariff_occupancy';
	protected $primaryKey = 'tariff_occupancy_id';
	public $timestamps = false;

	protected $casts = [
		'rm_occupancy_id' => 'int'
	];

	protected $fillable = [
		'tariff_occupancy',
		'rm_occupancy_id'
	];
}
