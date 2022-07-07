<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantReservationType
 * 
 * @property int $restaurant_reservation_type_id
 * @property string $reservation_type
 * @property int|null $reservation_type_active
 *
 * @package App\Models
 */
class RestaurantReservationType extends Model
{
	protected $table = 'restaurant_reservation_type';
	protected $primaryKey = 'restaurant_reservation_type_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_type_active' => 'int'
	];

	protected $fillable = [
		'reservation_type',
		'reservation_type_active'
	];
}
