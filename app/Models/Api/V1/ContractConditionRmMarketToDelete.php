<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractConditionRmMarketToDelete
 * 
 * @property int $id
 * @property int $policy_id
 * @property int $market_id
 * @property Carbon $assigned_date
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class ContractConditionRmMarketToDelete extends Model
{
	protected $table = 'contract_condition_rm_market_to_delete';
	public $timestamps = false;

	protected $casts = [
		'policy_id' => 'int',
		'market_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'policy_id',
		'market_id',
		'assigned_date',
		'valid_from',
		'valid_to',
		'active'
	];
}
