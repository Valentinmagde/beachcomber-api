<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmChildrenRate
 * 
 * @property int $id
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property string $sh1
 * @property float $sh1_value
 * @property string $sh2
 * @property float $sh2_value
 * @property string $own1
 * @property float $own1_value
 * @property int $child_condition_id
 * @property int $version
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmChildrenRate extends Model
{
	protected $table = 'tariff_rm_children_rate';
	public $timestamps = false;

	protected $casts = [
		'sh1_value' => 'float',
		'sh2_value' => 'float',
		'own1_value' => 'float',
		'child_condition_id' => 'int',
		'version' => 'int',
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
		'sh1_value',
		'sh2',
		'sh2_value',
		'own1',
		'own1_value',
		'child_condition_id',
		'version',
		'active'
	];
}
