<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferCombinable
 * 
 * @property int $offer_combinable_id
 * @property int $offer_id
 * @property int $offer_type_id
 *
 * @package App\Models
 */
class OfferCombinable extends Model
{
	protected $table = 'offer_combinable';
	protected $primaryKey = 'offer_combinable_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'offer_type_id' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'offer_type_id'
	];
}
