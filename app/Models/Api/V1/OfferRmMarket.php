<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmMarket
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $market_id
 * @property Carbon $assigned_date
 * @property Carbon $applicable_from
 * @property Carbon $applicable_to
 *
 * @package App\Models
 */
class OfferRmMarket extends Model
{
	protected $table = 'offer_rm_market';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'market_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];

	protected $fillable = [
		'offer_id',
		'market_id',
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];
}
