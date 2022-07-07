<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMarketCountry
 * 
 * @property int $id
 * @property int|null $market_id
 * @property int|null $country_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelMarketCountry extends Model
{
	protected $table = 'hotel_market_country';
	public $timestamps = false;

	protected $casts = [
		'market_id' => 'int',
		'country_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'market_id',
		'country_id',
		'valid_from',
		'valid_to'
	];
}
