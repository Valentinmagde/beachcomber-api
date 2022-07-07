<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelAgencyRatePolicy
 * 
 * @property int $hotel_agency_rate_policy_id
 * @property int|null $agency_rate_policy_id
 * @property int|null $hotel_id
 * @property int $active
 *
 * @package App\Models
 */
class HotelAgencyRatePolicy extends Model
{
	protected $table = 'hotel_agency_rate_policy';
	protected $primaryKey = 'hotel_agency_rate_policy_id';
	public $timestamps = false;

	protected $casts = [
		'agency_rate_policy_id' => 'int',
		'hotel_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'agency_rate_policy_id',
		'hotel_id',
		'active'
	];
}
