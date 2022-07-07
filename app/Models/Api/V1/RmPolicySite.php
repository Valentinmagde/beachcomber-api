<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmPolicySite
 * 
 * @property int $id
 * @property int $policy_id
 * @property int $hotel_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class RmPolicySite extends Model
{
	protected $table = 'rm_policy_site';
	public $timestamps = false;

	protected $casts = [
		'policy_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'policy_id',
		'hotel_id',
		'assigned_date'
	];
}
