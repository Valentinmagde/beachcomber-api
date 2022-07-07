<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmSite
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $hotel_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class OfferRmSite extends Model
{
	protected $table = 'offer_rm_site';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'offer_id',
		'hotel_id',
		'assigned_date'
	];
}
