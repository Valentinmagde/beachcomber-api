<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationDiscount
 * 
 * @property float $group_reservation_discount_id
 * @property float|null $group_reservation_id
 * @property string|null $discount_description
 * @property float|null $discount_amount
 * @property string|null $discount_approver
 * @property string|null $discount_type
 * @property int|null $discount_type_id
 * @property int|null $is_non_refundable
 * @property int|null $active
 *
 * @package App\Models
 */
class GroupQuoteReservationDiscount extends Model
{
	protected $table = 'group_quote_reservation_discount';
	protected $primaryKey = 'group_reservation_discount_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'float',
		'discount_amount' => 'float',
		'discount_type_id' => 'int',
		'is_non_refundable' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'group_reservation_id',
		'discount_description',
		'discount_amount',
		'discount_approver',
		'discount_type',
		'discount_type_id',
		'is_non_refundable',
		'active'
	];
}
