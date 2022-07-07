<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerAllot
 * 
 * @property int $id
 * @property int $year_id
 * @property int $reseller_id
 * @property int $site_id
 * @property int $market_id
 * @property int $room_id
 * @property int $prime_num
 * @property int $offprime_num
 * @property int $active
 *
 * @package App\Models
 */
class ResellerAllot extends Model
{
	protected $table = 'reseller_allot';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'reseller_id' => 'int',
		'site_id' => 'int',
		'market_id' => 'int',
		'room_id' => 'int',
		'prime_num' => 'int',
		'offprime_num' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'year_id',
		'reseller_id',
		'site_id',
		'market_id',
		'room_id',
		'prime_num',
		'offprime_num',
		'active'
	];
}
