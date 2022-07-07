<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffAgencyOld
 * 
 * @property int $tariff_agency_id
 * @property int $tariff_id
 * @property int $agency_id
 *
 * @package App\Models
 */
class TransferTariffAgencyOld extends Model
{
	protected $table = 'transfer_tariff_agency_old';
	protected $primaryKey = 'tariff_agency_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
		'agency_id' => 'int'
	];

	protected $fillable = [
		'tariff_id',
		'agency_id'
	];
}
