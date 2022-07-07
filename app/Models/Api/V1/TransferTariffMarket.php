<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTariffMarket
 * 
 * @property int $tariff_market_id
 * @property int|null $tariff_id
 * @property int|null $market_id
 *
 * @package App\Models
 */
class TransferTariffMarket extends Model
{
	protected $table = 'transfer_tariff_market';
	protected $primaryKey = 'tariff_market_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
		'market_id' => 'int'
	];

	protected $fillable = [
		'tariff_id',
		'market_id'
	];
}
