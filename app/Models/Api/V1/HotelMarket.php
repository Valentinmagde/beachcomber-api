<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMarket
 * 
 * @property int $hotel_market_id
 * @property int|null $market_id
 * @property string|null $market_name
 * @property int $hotel_id
 * @property int|null $asterix_hotel_id
 * @property int $for_stats
 * @property int|null $active
 *
 * @package App\Models
 */
class HotelMarket extends Model
{
	protected $table = 'hotel_market';
	protected $primaryKey = 'hotel_market_id';
	public $timestamps = false;

	protected $casts = [
		'market_id' => 'int',
		'hotel_id' => 'int',
		'asterix_hotel_id' => 'int',
		'for_stats' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'market_id',
		'market_name',
		'hotel_id',
		'asterix_hotel_id',
		'for_stats',
		'active'
	];
}
