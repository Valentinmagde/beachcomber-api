<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupReservationPackage
 * 
 * @property float|null $group_reservation_package_id
 * @property float|null $group_reservation_id
 * @property float|null $package_id
 * @property float|null $package_tariff_id
 * @property bool|null $package_is_wedding
 * @property bool|null $package_is_meal
 * @property bool|null $package_is_event
 * @property string|null $package_main
 * @property string|null $package_name
 * @property bool|null $active
 * @property Carbon $group_reservation_package_timestamp
 *
 * @package App\Models
 */
class GroupReservationPackage extends Model
{
	protected $table = 'group_reservation_package';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_reservation_package_id' => 'float',
		'group_reservation_id' => 'float',
		'package_id' => 'float',
		'package_tariff_id' => 'float',
		'package_is_wedding' => 'bool',
		'package_is_meal' => 'bool',
		'package_is_event' => 'bool',
		'active' => 'bool'
	];

	protected $dates = [
		'group_reservation_package_timestamp'
	];

	protected $fillable = [
		'group_reservation_package_id',
		'group_reservation_id',
		'package_id',
		'package_tariff_id',
		'package_is_wedding',
		'package_is_meal',
		'package_is_event',
		'package_main',
		'package_name',
		'active',
		'group_reservation_package_timestamp'
	];
}
