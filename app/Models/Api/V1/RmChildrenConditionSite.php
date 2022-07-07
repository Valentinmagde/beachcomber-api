<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmChildrenConditionSite
 * 
 * @property int $id
 * @property int $children_condition_id
 * @property int $hotel_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class RmChildrenConditionSite extends Model
{
	protected $table = 'rm_children_condition_site';
	public $timestamps = false;

	protected $casts = [
		'children_condition_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'children_condition_id',
		'hotel_id',
		'assigned_date'
	];
}
