<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OlTariffAgency
 * 
 * @property int $tariff_agency_id
 * @property int $tariff_id
 * @property int $agency_id
 *
 * @package App\Models
 */
class OlTariffAgency extends Model
{
	protected $table = 'ol_tariff_agency';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tariff_agency_id' => 'int',
		'tariff_id' => 'int',
		'agency_id' => 'int'
	];

	protected $fillable = [
		'tariff_agency_id',
		'tariff_id',
		'agency_id'
	];
}
