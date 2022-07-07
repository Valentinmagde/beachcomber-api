<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConditionMarket
 * 
 * @property int $id
 * @property int|null $condition_id
 * @property int|null $market_id
 *
 * @package App\Models
 */
class ConditionMarket extends Model
{
	protected $table = 'condition_market';
	public $timestamps = false;

	protected $casts = [
		'condition_id' => 'int',
		'market_id' => 'int'
	];

	protected $fillable = [
		'condition_id',
		'market_id'
	];
}
