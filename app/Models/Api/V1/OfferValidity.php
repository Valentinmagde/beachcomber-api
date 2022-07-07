<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferValidity
 * 
 * @property int $offer_validity_id
 * @property int $offer_id
 * @property Carbon $offer_valid_from
 * @property Carbon $offer_valid_to
 *
 * @package App\Models
 */
class OfferValidity extends Model
{
	protected $table = 'offer_validity';
	protected $primaryKey = 'offer_validity_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int'
	];

	protected $dates = [
		'offer_valid_from',
		'offer_valid_to'
	];

	protected $fillable = [
		'offer_id',
		'offer_valid_from',
		'offer_valid_to'
	];
}
