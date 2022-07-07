<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerRateCard
 * 
 * @property int $id
 * @property int $reseller_id
 * @property int $rate_card_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class ResellerRateCard extends Model
{
	protected $table = 'reseller_rate_card';
	public $timestamps = false;

	protected $casts = [
		'reseller_id' => 'int',
		'rate_card_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'reseller_id',
		'rate_card_id',
		'assigned_date'
	];
}
