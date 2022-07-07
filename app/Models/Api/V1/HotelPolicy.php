<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPolicy
 * 
 * @property int $hotel_policy_id
 * @property int $hotel_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelPolicy extends Model
{
	protected $table = 'hotel_policy';
	protected $primaryKey = 'hotel_policy_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
