<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmChildrenConditionMarket
 * 
 * @property int $id
 * @property int $children_condition_id
 * @property int $market_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class RmChildrenConditionMarket extends Model
{
	protected $table = 'rm_children_condition_market';
	public $timestamps = false;

	protected $casts = [
		'children_condition_id' => 'int',
		'market_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'children_condition_id',
		'market_id',
		'assigned_date'
	];
}
