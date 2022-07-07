<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferType
 * 
 * @property int $transfer_type_id
 * @property int $transfer_provider_id
 * @property int $tariff_type_id
 * @property string $tariff_type
 * @property int $min_pax
 * @property int $max_pax
 * @property int $service_type_id
 * @property string $service_type
 * @property string|null $pms_code
 * @property string|null $hms_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferType extends Model
{
	protected $table = 'transfer_type';
	protected $primaryKey = 'transfer_type_id';
	public $timestamps = false;

	protected $casts = [
		'transfer_provider_id' => 'int',
		'tariff_type_id' => 'int',
		'min_pax' => 'int',
		'max_pax' => 'int',
		'service_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'transfer_provider_id',
		'tariff_type_id',
		'tariff_type',
		'min_pax',
		'max_pax',
		'service_type_id',
		'service_type',
		'pms_code',
		'hms_code',
		'valid_from',
		'valid_to'
	];
}
