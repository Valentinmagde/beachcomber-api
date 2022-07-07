<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffCountry
 * 
 * @property int $tariff_country_id
 * @property int $tariff_id
 * @property int $country_id
 *
 * @package App\Models
 */
class TransferTariffCountry extends Model
{
	protected $table = 'transfer_tariff_country';
	protected $primaryKey = 'tariff_country_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'tariff_id',
		'country_id'
	];
}
