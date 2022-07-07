<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationExtra
 * 
 * @property float $group_reservation_extra_id
 * @property float|null $group_reservation_id
 * @property float|null $service_id
 * @property string|null $description
 * @property string|null $tariff_type
 * @property float|null $tariff_type_id
 * @property float|null $adult_rate
 * @property float|null $child_rate
 * @property float|null $num_adult
 * @property float|null $num_child
 * @property float|null $num_nights
 * @property float|null $total
 * @property float|null $adult_qty
 * @property float|null $child_qty
 * @property float|null $adult_total
 * @property float|null $child_total
 * @property string|null $currency
 * @property int|null $currency_id
 * @property int|null $active
 * @property Carbon $group_reservation_extra_timestamp
 *
 * @package App\Models
 */
class GroupQuoteReservationExtra extends Model
{
	protected $table = 'group_quote_reservation_extra';
	protected $primaryKey = 'group_reservation_extra_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'float',
		'service_id' => 'float',
		'tariff_type_id' => 'float',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'num_adult' => 'float',
		'num_child' => 'float',
		'num_nights' => 'float',
		'total' => 'float',
		'adult_qty' => 'float',
		'child_qty' => 'float',
		'adult_total' => 'float',
		'child_total' => 'float',
		'currency_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'group_reservation_extra_timestamp'
	];

	protected $fillable = [
		'group_reservation_id',
		'service_id',
		'description',
		'tariff_type',
		'tariff_type_id',
		'adult_rate',
		'child_rate',
		'num_adult',
		'num_child',
		'num_nights',
		'total',
		'adult_qty',
		'child_qty',
		'adult_total',
		'child_total',
		'currency',
		'currency_id',
		'active',
		'group_reservation_extra_timestamp'
	];
}
