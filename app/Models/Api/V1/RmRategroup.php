<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmRategroup
 * 
 * @property int $id
 * @property int $based_on_id
 * @property int $year_id
 * @property string|null $code
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class RmRategroup extends Model
{
	protected $table = 'rm_rategroup';
	public $timestamps = false;

	protected $casts = [
		'based_on_id' => 'int',
		'year_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'based_on_id',
		'year_id',
		'code',
		'name',
		'active'
	];
}
