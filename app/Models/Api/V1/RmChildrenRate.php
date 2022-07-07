<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmChildrenRate
 * 
 * @property int $id
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property string $sh1
 * @property string $sh2
 * @property string $own1
 * @property int $child_condition_id
 * @property int $active
 *
 * @package App\Models
 */
class RmChildrenRate extends Model
{
	protected $table = 'rm_children_rate';
	public $timestamps = false;

	protected $casts = [
		'child_condition_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'date_from',
		'date_to',
		'sh1',
		'sh2',
		'own1',
		'child_condition_id',
		'active'
	];
}
