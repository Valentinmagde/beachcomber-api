<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmAllotGroup
 * 
 * @property int $id
 * @property int $year_id
 * @property int $market_id
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class RmAllotGroup extends Model
{
	protected $table = 'rm_allot_group';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'market_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'year_id',
		'market_id',
		'name',
		'active'
	];
}
