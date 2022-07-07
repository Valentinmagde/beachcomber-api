<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepeaterCustomer
 * 
 * @property int $id
 * @property int $pms_customer_id
 * @property string $email
 * @property string|null $title
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $number_of_stays
 * @property int|null $room_number
 * @property string|null $language
 * @property int|null $residence_id
 * @property int|null $country_id
 * @property int|null $segment
 * @property int|null $company_id
 * @property Carbon|null $arrival_date
 * @property Carbon|null $departure_date
 * @property Carbon|null $processed
 * @property string $opt_in
 * @property Carbon $created
 *
 * @package App\Models
 */
class RepeaterCustomer extends Model
{
	protected $table = 'repeater_customer';
	public $timestamps = false;

	protected $casts = [
		'pms_customer_id' => 'int',
		'number_of_stays' => 'int',
		'room_number' => 'int',
		'residence_id' => 'int',
		'country_id' => 'int',
		'segment' => 'int',
		'company_id' => 'int'
	];

	protected $dates = [
		'arrival_date',
		'departure_date',
		'processed',
		'created'
	];

	protected $fillable = [
		'pms_customer_id',
		'email',
		'title',
		'first_name',
		'last_name',
		'number_of_stays',
		'room_number',
		'language',
		'residence_id',
		'country_id',
		'segment',
		'company_id',
		'arrival_date',
		'departure_date',
		'processed',
		'opt_in',
		'created'
	];
}
