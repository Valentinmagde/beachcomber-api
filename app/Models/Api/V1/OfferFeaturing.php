<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferFeaturing
 * 
 * @property int $offer_featuring_id
 * @property int $offer_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class OfferFeaturing extends Model
{
	protected $table = 'offer_featuring';
	protected $primaryKey = 'offer_featuring_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'offer_id',
		'valid_from',
		'valid_to'
	];
}
