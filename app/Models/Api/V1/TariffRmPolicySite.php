<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmPolicySite
 * 
 * @property int $id
 * @property int $policy_id
 * @property int $hotel_id
 * @property Carbon $assigned_date
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmPolicySite extends Model
{
	protected $table = 'tariff_rm_policy_site';
	public $timestamps = false;

	protected $casts = [
		'policy_id' => 'int',
		'hotel_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'policy_id',
		'hotel_id',
		'assigned_date',
		'valid_from',
		'valid_to',
		'active'
	];
}
