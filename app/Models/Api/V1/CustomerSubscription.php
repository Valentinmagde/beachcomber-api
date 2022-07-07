<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerSubscription
 * 
 * @property int $subscription_id
 * @property int $customer_id
 * @property int $subscription_type_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $customer_login_id
 *
 * @package App\Models
 */
class CustomerSubscription extends Model
{
	protected $table = 'customer_subscription';
	protected $primaryKey = 'subscription_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'subscription_type_id' => 'int',
		'customer_login_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'customer_id',
		'subscription_type_id',
		'valid_from',
		'valid_to',
		'customer_login_id'
	];
}
