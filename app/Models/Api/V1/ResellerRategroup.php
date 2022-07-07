<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerRategroup
 * 
 * @property int $id
 * @property int $reseller_id
 * @property int $rategroup_id
 * @property int $year_id
 *
 * @package App\Models
 */
class ResellerRategroup extends Model
{
	protected $table = 'reseller_rategroup';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'reseller_id' => 'int',
		'rategroup_id' => 'int',
		'year_id' => 'int'
	];

	protected $fillable = [
		'reseller_id',
		'rategroup_id',
		'year_id'
	];
}
