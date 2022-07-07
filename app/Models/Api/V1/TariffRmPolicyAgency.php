<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmPolicyAgency
 * 
 * @property int $id
 * @property int $policy_id
 * @property int $agency_id
 * @property Carbon $assigned_date
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmPolicyAgency extends Model
{
	protected $table = 'tariff_rm_policy_agency';
	public $timestamps = false;

	protected $casts = [
		'policy_id' => 'int',
		'agency_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'policy_id',
		'agency_id',
		'assigned_date',
		'valid_from',
		'valid_to',
		'active'
	];
}
