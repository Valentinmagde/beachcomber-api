<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageCountry
 * 
 * @property int $hotel_package_country_id
 * @property int|null $hotel_package_id
 * @property int|null $country_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class HotelPackageCountry extends Model
{
	protected $table = 'hotel_package_country';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'hotel_package_country_id' => 'int',
		'hotel_package_id' => 'int',
		'country_id' => 'int',
		'is_extended' => 'bool'
	];

	protected $dates = [
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'hotel_package_country_id',
		'hotel_package_id',
		'country_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to',
		'is_extended'
	];
}
