<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmRateType
 * 
 * @property int $id
 * @property string $name
 * @property int $sort_order
 * @property int $active
 *
 * @package App\Models
 */
class RmRateType extends Model
{
	protected $table = 'rm_rate_type';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'sort_order',
		'active'
	];
}
