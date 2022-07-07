<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmAllotGroupRelease
 * 
 * @property int $id
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property string $assign_to
 * @property string $description
 * @property string $release
 * @property int $sort_order
 * @property int $allot_group_id
 * @property int $active
 *
 * @package App\Models
 */
class RmAllotGroupRelease extends Model
{
	protected $table = 'rm_allot_group_release';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'allot_group_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'date_from',
		'date_to',
		'assign_to',
		'description',
		'release',
		'sort_order',
		'allot_group_id',
		'active'
	];
}
