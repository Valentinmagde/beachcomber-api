<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferAgency
 * 
 * @property int $offer_agency_id
 * @property int|null $offer_id
 * @property int|null $agency_id
 * @property int $tariff_period_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class OfferAgency extends Model
{
	protected $table = 'offer_agency';
	protected $primaryKey = 'offer_agency_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'agency_id' => 'int',
		'tariff_period_id' => 'int',
		'is_extended' => 'bool'
	];

	protected $dates = [
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'offer_id',
		'agency_id',
		'tariff_period_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to',
		'is_extended'
	];
}
