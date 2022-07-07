<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SeasonMarket
 * 
 * @property int $season_market_id
 * @property int|null $season_id
 * @property int|null $market_id
 * @property bool|null $active
 *
 * @package App\Models
 */
class SeasonMarket extends Model
{
	protected $table = 'season_market';
	protected $primaryKey = 'season_market_id';
	public $timestamps = false;

	protected $casts = [
		'season_id' => 'int',
		'market_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'season_id',
		'market_id',
		'active'
	];
}
