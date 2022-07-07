<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationCustomer
 * 
 * @property float $group_reservation_customer_id
 * @property float|null $group_customer_id
 * @property float|null $group_reservation_id
 * @property int|null $is_main_contact
 * @property bool|null $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property Carbon $created_on
 *
 * @package App\Models
 */
class GroupQuoteReservationCustomer extends Model
{
	protected $table = 'group_quote_reservation_customer';
	protected $primaryKey = 'group_reservation_customer_id';
	public $timestamps = false;

	protected $casts = [
		'group_customer_id' => 'float',
		'group_reservation_id' => 'float',
		'is_main_contact' => 'int',
		'active' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created_on'
	];

	protected $fillable = [
		'group_customer_id',
		'group_reservation_id',
		'is_main_contact',
		'active',
		'valid_from',
		'valid_to',
		'created_on'
	];
}
