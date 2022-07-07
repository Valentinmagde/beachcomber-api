<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelChildAgePolicy
 * 
 * @property int $Hotel_Child_Age_Policy_id
 * @property int $hotel_id
 * @property Carbon|null $date_from
 * @property Carbon|null $date_to
 * @property int|null $infant_min_age
 * @property int|null $infant_max_age
 * @property int|null $child_min_age
 * @property int|null $child_max_age
 * @property int|null $teen_min_age
 * @property int|null $teen_max_age
 *
 * @package App\Models
 */
class HotelChildAgePolicy extends Model
{
	protected $table = 'hotel_child_age_policy';
	protected $primaryKey = 'Hotel_Child_Age_Policy_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'infant_min_age' => 'int',
		'infant_max_age' => 'int',
		'child_min_age' => 'int',
		'child_max_age' => 'int',
		'teen_min_age' => 'int',
		'teen_max_age' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'hotel_id',
		'date_from',
		'date_to',
		'infant_min_age',
		'infant_max_age',
		'child_min_age',
		'child_max_age',
		'teen_min_age',
		'teen_max_age'
	];
}
