<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RateStrategy
 * 
 * @property int $rate_strategy_id
 * @property string|null $rate_strategy
 *
 * @package App\Models
 */
class RateStrategy extends Model
{
	protected $table = 'rate_strategy';
	protected $primaryKey = 'rate_strategy_id';
	public $timestamps = false;

	protected $fillable = [
		'rate_strategy'
	];
}
