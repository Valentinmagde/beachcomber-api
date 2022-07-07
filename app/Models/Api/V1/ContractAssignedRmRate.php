<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractAssignedRmRate
 * 
 * @property int $id
 * @property int $contract_id
 * @property int $ratecard_id
 * @property int $sort_order
 * @property int|null $active
 *
 * @package App\Models
 */
class ContractAssignedRmRate extends Model
{
	protected $table = 'contract_assigned_rm_rates';
	public $timestamps = false;

	protected $casts = [
		'contract_id' => 'int',
		'ratecard_id' => 'int',
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'contract_id',
		'ratecard_id',
		'sort_order',
		'active'
	];
}
