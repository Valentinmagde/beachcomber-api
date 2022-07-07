<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffOld
 * 
 * @property int $transfer_tariff_id
 * @property int $transfer_type_id
 * @property int $transfer_tariff_mode_id
 * @property int $client_type_id
 * @property string $client_type
 * @property float $adult_rate
 * @property float $child_rate
 * @property float $infant_rate
 * @property int $currency_id
 * @property string $currency
 * @property int $transfer_for
 * @property string $hms_code
 * @property string $hms_child_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferTariffOld extends Model
{
	protected $table = 'transfer_tariff_old';
	protected $primaryKey = 'transfer_tariff_id';
	public $timestamps = false;

	protected $casts = [
		'transfer_type_id' => 'int',
		'transfer_tariff_mode_id' => 'int',
		'client_type_id' => 'int',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'infant_rate' => 'float',
		'currency_id' => 'int',
		'transfer_for' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'transfer_type_id',
		'transfer_tariff_mode_id',
		'client_type_id',
		'client_type',
		'adult_rate',
		'child_rate',
		'infant_rate',
		'currency_id',
		'currency',
		'transfer_for',
		'hms_code',
		'hms_child_code',
		'valid_from',
		'valid_to'
	];
}
