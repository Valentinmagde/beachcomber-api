<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationCustomer
 * 
 * @property int $reservation_customer_id
 * @property int $customer_id
 * @property int $reservation_id
 * @property int $customer_company_id
 * @property int $is_main_contact
 * @property bool $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created_on
 * @property int $is_authenticated
 *
 * @package App\Models
 */
class ReservationCustomer extends Model
{
	protected $table = 'reservation_customer';
	protected $primaryKey = 'reservation_customer_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'reservation_id' => 'int',
		'customer_company_id' => 'int',
		'is_main_contact' => 'int',
		'active' => 'bool',
		'user_id' => 'int',
		'is_authenticated' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created_on'
	];

	protected $fillable = [
		'customer_id',
		'reservation_id',
		'customer_company_id',
		'is_main_contact',
		'active',
		'user_id',
		'user_name',
		'valid_from',
		'valid_to',
		'created_on',
		'is_authenticated'
	];
}
