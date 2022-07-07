<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffModeDescription
 * 
 * @property int $transfer_rate_mode_desc_id
 * @property int $transfer_rate_mode_id
 * @property string $transfer_rate_mode_description
 * @property int $language_id
 *
 * @package App\Models
 */
class TransferTariffModeDescription extends Model
{
	protected $table = 'transfer_tariff_mode_description';
	protected $primaryKey = 'transfer_rate_mode_desc_id';
	public $timestamps = false;

	protected $casts = [
		'transfer_rate_mode_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'transfer_rate_mode_id',
		'transfer_rate_mode_description',
		'language_id'
	];
}
