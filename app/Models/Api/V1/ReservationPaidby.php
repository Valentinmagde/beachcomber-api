<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPaidby
 * 
 * @property int $resevation_paid_by_id
 * @property string|null $resevation_paid_by
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class ReservationPaidby extends Model
{
	protected $table = 'reservation_paidby';
	protected $primaryKey = 'resevation_paid_by_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'resevation_paid_by',
		'valid_from',
		'valid_to',
		'active'
	];
}
