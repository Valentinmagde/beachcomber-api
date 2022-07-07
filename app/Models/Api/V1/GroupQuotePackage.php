<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuotePackage
 * 
 * @property int $quote_package_id
 * @property string $name
 * @property bool $active
 * @property Carbon $created
 * @property Carbon $updated
 * @property int $quote_package_type_id
 * @property int $quote_package_rate_type_id
 *
 * @package App\Models
 */
class GroupQuotePackage extends Model
{
	protected $table = 'group_quote_package';
	protected $primaryKey = 'quote_package_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool',
		'quote_package_type_id' => 'int',
		'quote_package_rate_type_id' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'name',
		'active',
		'created',
		'updated',
		'quote_package_type_id',
		'quote_package_rate_type_id'
	];
}
