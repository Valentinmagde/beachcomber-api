<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffMode
 * 
 * @property int $transfer_rate_mode_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferTariffMode extends Model
{
	protected $table = 'transfer_tariff_mode';
	protected $primaryKey = 'transfer_rate_mode_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to'
	];
}
