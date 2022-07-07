<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmCombinable
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $combinable_offer_id
 *
 * @package App\Models
 */
class OfferRmCombinable extends Model
{
	protected $table = 'offer_rm_combinable';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'combinable_offer_id' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'combinable_offer_id'
	];
}
