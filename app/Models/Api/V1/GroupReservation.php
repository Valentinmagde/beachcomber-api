<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupReservation
 * 
 * @property int $group_reservation_id
 * @property Carbon $group_reservation_date
 * @property int $client_type
 * @property string|null $agency
 * @property int $country_id
 * @property int $adults
 * @property int|null $children
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property string|null $remarks
 * @property int $status
 * @property int $agency_id
 * @property Carbon $expiry_date
 * @property float $net_total
 * @property float $total_extra
 * @property float $total_discount
 * @property float $total_accom
 * @property int $is_mail_sent
 * @property Carbon|null $last_mail_date
 * @property string|null $group_name
 * @property string $currency
 * @property int $currency_id
 * @property int $language_id
 *
 * @package App\Models
 */
class GroupReservation extends Model
{
	protected $table = 'group_reservation';
	protected $primaryKey = 'group_reservation_id';
	public $timestamps = false;

	protected $casts = [
		'client_type' => 'int',
		'country_id' => 'int',
		'adults' => 'int',
		'children' => 'int',
		'status' => 'int',
		'agency_id' => 'int',
		'net_total' => 'float',
		'total_extra' => 'float',
		'total_discount' => 'float',
		'total_accom' => 'float',
		'is_mail_sent' => 'int',
		'currency_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'group_reservation_date',
		'check_in',
		'check_out',
		'expiry_date',
		'last_mail_date'
	];

	protected $fillable = [
		'group_reservation_date',
		'client_type',
		'agency',
		'country_id',
		'adults',
		'children',
		'check_in',
		'check_out',
		'remarks',
		'status',
		'agency_id',
		'expiry_date',
		'net_total',
		'total_extra',
		'total_discount',
		'total_accom',
		'is_mail_sent',
		'last_mail_date',
		'group_name',
		'currency',
		'currency_id',
		'language_id'
	];
}
