<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmPackage
 * 
 * @property int $id
 * @property int $year_id
 * @property int $based_on_id
 * @property string $code
 * @property string $name
 * @property int $is_default
 * @property int $active
 *
 * @package App\Models
 */
class RmPackage extends Model
{
	protected $table = 'rm_package';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'based_on_id' => 'int',
		'is_default' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'year_id',
		'based_on_id',
		'code',
		'name',
		'is_default',
		'active'
	];
}
