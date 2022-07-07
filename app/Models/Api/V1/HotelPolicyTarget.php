<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPolicyTarget
 * 
 * @property int $hotel_policy_target_id
 * @property int $hotel_policy_id
 * @property int $navigation_menu_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelPolicyTarget extends Model
{
	protected $table = 'hotel_policy_target';
	protected $primaryKey = 'hotel_policy_target_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_policy_id' => 'int',
		'navigation_menu_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_policy_id',
		'navigation_menu_id',
		'valid_from',
		'valid_to'
	];
}
