<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmMealType
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $meal_type_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class OfferRmMealType extends Model
{
	protected $table = 'offer_rm_meal_type';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'meal_type_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'offer_id',
		'meal_type_id',
		'assigned_date'
	];
}
