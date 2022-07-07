<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmReseller
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $reseller_id
 * @property Carbon $assigned_date
 * @property Carbon $applicable_from
 * @property Carbon $applicable_to
 *
 * @package App\Models
 */
class OfferRmReseller extends Model
{
	protected $table = 'offer_rm_reseller';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'reseller_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];

	protected $fillable = [
		'offer_id',
		'reseller_id',
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];
}
