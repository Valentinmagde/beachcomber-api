<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationCompany
 * 
 * @property int $reservation_company_id
 * @property int $reservation_id
 * @property int $company_id
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_company_timestamp
 * @property int $active
 *
 * @package App\Models
 */
class ReservationCompany extends Model
{
	protected $table = 'reservation_company';
	protected $primaryKey = 'reservation_company_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'company_id' => 'int',
		'user_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'reservation_company_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'company_id',
		'user_id',
		'user_name',
		'reservation_company_timestamp',
		'active'
	];
}
