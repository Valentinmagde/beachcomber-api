<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelCancellationPolicy
 * 
 * @property int $cancellation_policy_id
 * @property int $max_days_before_arrival
 * @property int $min_days_before_arrival
 * @property float $penalty
 * @property string $description
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelCancellationPolicy extends Model
{
	protected $table = 'hotel_cancellation_policy';
	protected $primaryKey = 'cancellation_policy_id';
	public $timestamps = false;

	protected $casts = [
		'max_days_before_arrival' => 'int',
		'min_days_before_arrival' => 'int',
		'penalty' => 'float'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'max_days_before_arrival',
		'min_days_before_arrival',
		'penalty',
		'description',
		'valid_from',
		'valid_to'
	];
}
