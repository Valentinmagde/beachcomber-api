<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PackageSubType
 * 
 * @property int $package_subtype_id
 * @property int $package_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class PackageSubType extends Model
{
	protected $table = 'package_sub_type';
	protected $primaryKey = 'package_subtype_id';
	public $timestamps = false;

	protected $casts = [
		'package_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'package_id',
		'valid_from',
		'valid_to'
	];
}
