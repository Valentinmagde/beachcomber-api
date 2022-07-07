<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuotePackageRate
 * 
 * @property int $quote_package_rates_id
 * @property string $name
 * @property Carbon $created
 * @property Carbon $updated
 * @property int $quote_package_rates_type_id
 * @property int $destination_id
 * @property float $rates
 * @property bool $active
 *
 * @package App\Models
 */
class GroupQuotePackageRate extends Model
{
	protected $table = 'group_quote_package_rates';
	protected $primaryKey = 'quote_package_rates_id';
	public $timestamps = false;

	protected $casts = [
		'quote_package_rates_type_id' => 'int',
		'destination_id' => 'int',
		'rates' => 'float',
		'active' => 'bool'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'name',
		'created',
		'updated',
		'quote_package_rates_type_id',
		'destination_id',
		'rates',
		'active'
	];
}
