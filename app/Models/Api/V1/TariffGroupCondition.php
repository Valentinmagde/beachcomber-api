<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffGroupCondition
 * 
 * @property int $tariff_group_condition_id
 * @property int|null $pax_from
 * @property int|null $pax_to
 * @property float|null $percentage_discount
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class TariffGroupCondition extends Model
{
	protected $table = 'tariff_group_condition';
	protected $primaryKey = 'tariff_group_condition_id';
	public $timestamps = false;

	protected $casts = [
		'pax_from' => 'int',
		'pax_to' => 'int',
		'percentage_discount' => 'float'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'pax_from',
		'pax_to',
		'percentage_discount',
		'valid_from',
		'valid_to'
	];
}
