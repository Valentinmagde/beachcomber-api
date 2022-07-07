<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmContractSite
 * 
 * @property int $id
 * @property int $contract_id
 * @property int $hotel_id
 * @property Carbon $date_added
 * @property int $sort_order
 *
 * @package App\Models
 */
class RmContractSite extends Model
{
	protected $table = 'rm_contract_site';
	public $timestamps = false;

	protected $casts = [
		'contract_id' => 'int',
		'hotel_id' => 'int',
		'sort_order' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'contract_id',
		'hotel_id',
		'date_added',
		'sort_order'
	];
}
