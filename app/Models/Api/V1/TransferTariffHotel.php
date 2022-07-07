<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffHotel
 * 
 * @property int $transfer_tariff_hotel_id
 * @property int $transfer_tariff_id
 * @property int $hotel_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferTariffHotel extends Model
{
	protected $table = 'transfer_tariff_hotel';
	protected $primaryKey = 'transfer_tariff_hotel_id';
	public $timestamps = false;

	protected $casts = [
		'transfer_tariff_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'transfer_tariff_id',
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
