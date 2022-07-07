<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmChildrenConditionAgency
 * 
 * @property int $id
 * @property int $children_condition_id
 * @property int $agency_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class TariffRmChildrenConditionAgency extends Model
{
	protected $table = 'tariff_rm_children_condition_agency';
	public $timestamps = false;

	protected $casts = [
		'children_condition_id' => 'int',
		'agency_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'children_condition_id',
		'agency_id',
		'assigned_date'
	];
}
