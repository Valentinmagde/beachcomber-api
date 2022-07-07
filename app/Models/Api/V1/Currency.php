<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $id_currency
 * @property string $currency
 * @property string $currency_code
 * @property string $hms_code
 * @property int $active
 * @property string $country
 * @property bool $has_exchange_rate
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currency';
	protected $primaryKey = 'id_currency';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int',
		'has_exchange_rate' => 'bool'
	];

	protected $fillable = [
		'currency',
		'currency_code',
		'hms_code',
		'active',
		'country',
		'has_exchange_rate'
	];
}
