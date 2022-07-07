<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageSupplement
 * 
 * @property int $hotel_package_supplement_id
 * @property int $hotel_package_id
 * @property int $pax_no
 * @property float $tariff
 * @property int $tariff_type_id
 * @property string $tariff_type
 * @property string $currency
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int|null $currency_id
 * @property int $ranking
 *
 * @package App\Models
 */
class HotelPackageSupplement extends Model
{
	protected $table = 'hotel_package_supplement';
	protected $primaryKey = 'hotel_package_supplement_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_id' => 'int',
		'pax_no' => 'int',
		'tariff' => 'float',
		'tariff_type_id' => 'int',
		'currency_id' => 'int',
		'ranking' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_package_id',
		'pax_no',
		'tariff',
		'tariff_type_id',
		'tariff_type',
		'currency',
		'valid_from',
		'valid_to',
		'currency_id',
		'ranking'
	];
}
