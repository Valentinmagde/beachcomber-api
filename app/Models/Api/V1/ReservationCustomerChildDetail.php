<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationCustomerChildDetail
 * 
 * @property int $reservation_customer_child_details_id
 * @property int $reservation_id
 * @property string $child_status
 * @property int $child_age
 * @property int $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_customer_child_details_timestamp
 *
 * @package App\Models
 */
class ReservationCustomerChildDetail extends Model
{
	protected $table = 'reservation_customer_child_details';
	protected $primaryKey = 'reservation_customer_child_details_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'child_age' => 'int',
		'active' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'reservation_customer_child_details_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'child_status',
		'child_age',
		'active',
		'user_id',
		'user_name',
		'reservation_customer_child_details_timestamp'
	];
}
