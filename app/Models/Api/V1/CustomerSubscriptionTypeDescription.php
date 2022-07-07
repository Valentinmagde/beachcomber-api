<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerSubscriptionTypeDescription
 * 
 * @property int $subscription_type_desc_id
 * @property string|null $subscription_type
 * @property int|null $language_id
 * @property int $subscription_type_id
 *
 * @package App\Models
 */
class CustomerSubscriptionTypeDescription extends Model
{
	protected $table = 'customer_subscription_type_description';
	protected $primaryKey = 'subscription_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int',
		'subscription_type_id' => 'int'
	];

	protected $fillable = [
		'subscription_type',
		'language_id',
		'subscription_type_id'
	];
}
