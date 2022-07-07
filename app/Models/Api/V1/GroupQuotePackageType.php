<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuotePackageType
 * 
 * @property int $quote_package_type_id
 * @property string $name
 * @property bool $active
 * @property Carbon $created
 * @property Carbon $updated
 *
 * @package App\Models
 */
class GroupQuotePackageType extends Model
{
	protected $table = 'group_quote_package_type';
	protected $primaryKey = 'quote_package_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'name',
		'active',
		'created',
		'updated'
	];
}
