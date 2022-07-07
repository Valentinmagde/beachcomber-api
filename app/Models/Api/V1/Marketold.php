<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Marketold
 * 
 * @property int $market_id
 * @property string|null $name
 * @property string $currency
 * @property string $rate_manager_market_name
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class Marketold extends Model
{
	protected $table = 'marketold';
	protected $primaryKey = 'market_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'name',
		'currency',
		'rate_manager_market_name',
		'valid_from',
		'valid_to'
	];
}
