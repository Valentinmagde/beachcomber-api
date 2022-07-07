<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmMarketCountry
 * 
 * @property int $market_id
 * @property int $country_id
 *
 * @package App\Models
 */
class RmMarketCountry extends Model
{
	protected $table = 'rm_market_country';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'market_id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'market_id',
		'country_id'
	];
}
