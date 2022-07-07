<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmRateCardOffer
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $offer_id
 * @property int $sort_order
 *
 * @package App\Models
 */
class TariffRmRateCardOffer extends Model
{
	protected $table = 'tariff_rm_rate_card_offer';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'offer_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'rate_card_id',
		'offer_id',
		'sort_order'
	];
}
