<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMarketRatePolicy
 * 
 * @property int $hotel_market_rate_policy_id
 * @property int $hotel_market_id
 * @property float $percentage_rate
 * @property string $percentage_rate_type
 * @property int $reference_market_id
 * @property string $reference_season
 * @property string $client_type
 * @property int $client_type_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $active
 * @property string|null $created_by
 * @property Carbon|null $created_on
 * @property string|null $last_updated_by
 * @property Carbon|null $last_updated_on
 * @property string|null $deleted_by
 * @property Carbon|null $deleted_on
 *
 * @package App\Models
 */
class HotelMarketRatePolicy extends Model
{
	protected $table = 'hotel_market_rate_policy';
	protected $primaryKey = 'hotel_market_rate_policy_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_market_id' => 'int',
		'percentage_rate' => 'float',
		'reference_market_id' => 'int',
		'client_type_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created_on',
		'last_updated_on',
		'deleted_on'
	];

	protected $fillable = [
		'hotel_market_id',
		'percentage_rate',
		'percentage_rate_type',
		'reference_market_id',
		'reference_season',
		'client_type',
		'client_type_id',
		'valid_from',
		'valid_to',
		'active',
		'created_by',
		'created_on',
		'last_updated_by',
		'last_updated_on',
		'deleted_by',
		'deleted_on'
	];
}
