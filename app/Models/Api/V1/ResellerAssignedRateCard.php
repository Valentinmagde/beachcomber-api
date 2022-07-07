<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerAssignedRateCard
 * 
 * @property int $id
 * @property int $reseller_id
 * @property int $rate_card_id
 * @property Carbon $assigned_date
 * @property Carbon|null $applicable_date
 * @property bool $active
 *
 * @package App\Models
 */
class ResellerAssignedRateCard extends Model
{
	protected $table = 'reseller_assigned_rate_card';
	public $timestamps = false;

	protected $casts = [
		'reseller_id' => 'int',
		'rate_card_id' => 'int',
		'active' => 'bool'
	];

	protected $dates = [
		'assigned_date',
		'applicable_date'
	];

	protected $fillable = [
		'reseller_id',
		'rate_card_id',
		'assigned_date',
		'applicable_date',
		'active'
	];
}
