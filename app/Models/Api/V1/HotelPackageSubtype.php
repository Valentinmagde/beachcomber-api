<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageSubtype
 * 
 * @property int $hotel_package_sub_id
 * @property int $hotel_package_id
 * @property int $package_sub_type_id
 * @property float $adult
 * @property float $child
 * @property int $tariff_type_id
 * @property string $tariff_type
 * @property string $currency
 * @property Carbon $valid_fom
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelPackageSubtype extends Model
{
	protected $table = 'hotel_package_subtype';
	protected $primaryKey = 'hotel_package_sub_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_id' => 'int',
		'package_sub_type_id' => 'int',
		'adult' => 'float',
		'child' => 'float',
		'tariff_type_id' => 'int'
	];

	protected $dates = [
		'valid_fom',
		'valid_to'
	];

	protected $fillable = [
		'hotel_package_id',
		'package_sub_type_id',
		'adult',
		'child',
		'tariff_type_id',
		'tariff_type',
		'currency',
		'valid_fom',
		'valid_to'
	];
}
