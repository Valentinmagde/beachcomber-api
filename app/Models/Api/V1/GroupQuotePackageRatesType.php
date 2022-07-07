<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuotePackageRatesType
 * 
 * @property int $quote_package_rates_type_id
 * @property string $name
 * @property Carbon $created
 * @property Carbon|null $updated
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class GroupQuotePackageRatesType extends Model
{
	protected $table = 'group_quote_package_rates_type';
	protected $primaryKey = 'quote_package_rates_type_id';
	public $timestamps = false;

	protected $dates = [
		'created',
		'updated',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'name',
		'created',
		'updated',
		'valid_from',
		'valid_to'
	];
}
