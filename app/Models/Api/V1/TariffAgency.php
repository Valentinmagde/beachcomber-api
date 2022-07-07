<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffAgency
 * 
 * @property int $tariff_agency_id
 * @property int $tariff_id
 * @property int $agency_id
 * @property int|null $tariff_period_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class TariffAgency extends Model
{
	protected $table = 'tariff_agency';
	protected $primaryKey = 'tariff_agency_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
		'agency_id' => 'int',
		'tariff_period_id' => 'int',
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
		'agency_id',
		'tariff_period_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to',
		'is_extended'
	];
}
