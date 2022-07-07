<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Package
 * 
 * @property int $package_id
 * @property bool $payable
 * @property bool $is_group
 * @property bool $is_event
 * @property bool $is_individual
 * @property bool $is_meal
 * @property int $is_bundle
 * @property string|null $bg_color
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int|null $parent_id
 *
 * @package App\Models
 */
class Package extends Model
{
	protected $table = 'package';
	public $timestamps = false;

	protected $casts = [
		'payable' => 'bool',
		'is_group' => 'bool',
		'is_event' => 'bool',
		'is_individual' => 'bool',
		'is_meal' => 'bool',
		'is_bundle' => 'int',
		'parent_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'payable',
		'is_group',
		'is_event',
		'is_individual',
		'is_meal',
		'is_bundle',
		'bg_color',
		'parent_id'
	];
}
