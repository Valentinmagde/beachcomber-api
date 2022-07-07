<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageAgency
 * 
 * @property int $hotel_package_agency_id
 * @property int|null $hotel_package_id
 * @property int|null $agency_id
 * @property Carbon|null $applicable_from
 * @property Carbon $applicable_to
 * @property bool $is_extended
 * @property int $tariff_period_id
 * @property Carbon|null $active_from
 * @property Carbon $active_to
 *
 * @package App\Models
 */
class HotelPackageAgency extends Model
{
	protected $table = 'hotel_package_agency';
	protected $primaryKey = 'hotel_package_agency_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_id' => 'int',
		'agency_id' => 'int',
		'is_extended' => 'bool',
		'tariff_period_id' => 'int'
	];

	protected $dates = [
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'hotel_package_id',
		'agency_id',
		'applicable_from',
		'applicable_to',
		'is_extended',
		'tariff_period_id',
		'active_from',
		'active_to'
	];
}
