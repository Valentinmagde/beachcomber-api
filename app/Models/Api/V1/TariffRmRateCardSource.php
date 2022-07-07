<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmRateCardSource
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $source_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class TariffRmRateCardSource extends Model
{
	protected $table = 'tariff_rm_rate_card_source';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'source_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'rate_card_id',
		'source_id',
		'assigned_date'
	];
}
