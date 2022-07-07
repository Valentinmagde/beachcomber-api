<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantReservationDescription
 * 
 * @property int $restaurant_reservation_desc_id
 * @property int $restaurant_reservation_type_id
 * @property int $language_id
 * @property string $description
 * @property int|null $reservation_desc_active
 *
 * @package App\Models
 */
class RestaurantReservationDescription extends Model
{
	protected $table = 'restaurant_reservation_description';
	protected $primaryKey = 'restaurant_reservation_desc_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_reservation_type_id' => 'int',
		'language_id' => 'int',
		'reservation_desc_active' => 'int'
	];

	protected $fillable = [
		'restaurant_reservation_type_id',
		'language_id',
		'description',
		'reservation_desc_active'
	];
}
