<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationDiscount
 * 
 * @property int $reservation_discount_id
 * @property int $reservation_id
 * @property string $discount_description
 * @property string $discount_reason
 * @property float $discount_amount
 * @property string $discount_approver
 * @property string $discount_type
 * @property int $discount_type_id
 * @property int $is_non_refundable
 * @property int $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_discount_timestamp
 *
 * @package App\Models
 */
class ReservationDiscount extends Model
{
	protected $table = 'reservation_discount';
	protected $primaryKey = 'reservation_discount_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'discount_amount' => 'float',
		'discount_type_id' => 'int',
		'is_non_refundable' => 'int',
		'active' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'reservation_discount_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'discount_description',
		'discount_reason',
		'discount_amount',
		'discount_approver',
		'discount_type',
		'discount_type_id',
		'is_non_refundable',
		'active',
		'user_id',
		'user_name',
		'reservation_discount_timestamp'
	];
}
