<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmRateCardOffer
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $offer_id
 * @property int $sort_order
 *
 * @package App\Models
 */
class RmRateCardOffer extends Model
{
	protected $table = 'rm_rate_card_offer';
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
