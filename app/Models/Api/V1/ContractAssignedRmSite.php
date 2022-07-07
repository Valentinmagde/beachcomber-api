<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractAssignedRmSite
 * 
 * @property int $id
 * @property int $contract_id
 * @property int $hotel_id
 * @property Carbon $date_added
 * @property int $sort_order
 * @property int|null $active
 *
 * @package App\Models
 */
class ContractAssignedRmSite extends Model
{
	protected $table = 'contract_assigned_rm_site';
	public $timestamps = false;

	protected $casts = [
		'contract_id' => 'int',
		'hotel_id' => 'int',
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'contract_id',
		'hotel_id',
		'date_added',
		'sort_order',
		'active'
	];
}
