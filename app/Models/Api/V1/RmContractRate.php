<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmContractRate
 * 
 * @property int $id
 * @property int $contract_id
 * @property int $ratecard_id
 * @property int $sort_order
 *
 * @package App\Models
 */
class RmContractRate extends Model
{
	protected $table = 'rm_contract_rates';
	public $timestamps = false;

	protected $casts = [
		'contract_id' => 'int',
		'ratecard_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'contract_id',
		'ratecard_id',
		'sort_order'
	];
}
