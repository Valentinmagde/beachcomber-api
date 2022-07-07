<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffCountry
 * 
 * @property int $tariff_country_id
 * @property int $tariff_id
 * @property int $country_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class TariffCountry extends Model
{
	protected $table = 'tariff_country';
	protected $primaryKey = 'tariff_country_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
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
		'tariff_id',
		'country_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to',
		'is_extended'
	];
}
