<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractAssignedRmCondition
 * 
 * @property int $id
 * @property int $policy_id
 * @property int $contract_id
 * @property int $sort_order
 * @property int|null $active
 *
 * @package App\Models
 */
class ContractAssignedRmCondition extends Model
{
	protected $table = 'contract_assigned_rm_condition';
	public $timestamps = false;

	protected $casts = [
		'policy_id' => 'int',
		'contract_id' => 'int',
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'policy_id',
		'contract_id',
		'sort_order',
		'active'
	];
}
