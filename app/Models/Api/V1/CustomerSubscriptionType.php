<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerSubscriptionType
 * 
 * @property int $subscription_type_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property bool $on_booking_form
 * @property string $name
 *
 * @package App\Models
 */
class CustomerSubscriptionType extends Model
{
	protected $table = 'customer_subscription_type';
	protected $primaryKey = 'subscription_type_id';
	public $timestamps = false;

	protected $casts = [
		'on_booking_form' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to',
		'on_booking_form',
		'name'
	];
}
