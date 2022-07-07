<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPackage
 * 
 * @property int $reservation_package_id
 * @property int $reservation_id
 * @property int $package_id
 * @property int $package_tariff_id
 * @property bool $package_is_wedding
 * @property bool $package_is_meal
 * @property bool $package_is_event
 * @property string $package_main
 * @property string $package_name
 * @property string|null $remarks
 * @property bool $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_package_timestamp
 *
 * @package App\Models
 */
class ReservationPackage extends Model
{
	protected $table = 'reservation_package';
	protected $primaryKey = 'reservation_package_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'package_id' => 'int',
		'package_tariff_id' => 'int',
		'package_is_wedding' => 'bool',
		'package_is_meal' => 'bool',
		'package_is_event' => 'bool',
		'active' => 'bool',
		'user_id' => 'int'
	];

	protected $dates = [
		'reservation_package_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'package_id',
		'package_tariff_id',
		'package_is_wedding',
		'package_is_meal',
		'package_is_event',
		'package_main',
		'package_name',
		'remarks',
		'active',
		'user_id',
		'user_name',
		'reservation_package_timestamp'
	];
}
