<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmContractPolicy
 * 
 * @property int $id
 * @property int $policy_id
 * @property int $contract_id
 * @property int $sort_order
 *
 * @package App\Models
 */
class RmContractPolicy extends Model
{
	protected $table = 'rm_contract_policy';
	public $timestamps = false;

	protected $casts = [
		'policy_id' => 'int',
		'contract_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'policy_id',
		'contract_id',
		'sort_order'
	];
}
