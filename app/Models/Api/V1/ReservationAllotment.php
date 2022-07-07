<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationAllotment
 * 
 * @property int $reservation_allotment_id
 * @property int $reservation_id
 * @property int $reservation_details_id
 * @property int|null $reseller_id
 * @property int $allotment_id
 * @property string|null $allotment_code
 * @property int $quantity
 * @property bool $status
 * @property string|null $note
 * @property Carbon|null $created
 * @property Carbon|null $updated
 * @property Carbon|null $date
 * @property int|null $room_id
 * @property int|null $active
 *
 * @package App\Models
 */
class ReservationAllotment extends Model
{
	protected $table = 'reservation_allotment';
	protected $primaryKey = 'reservation_allotment_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'reservation_details_id' => 'int',
		'reseller_id' => 'int',
		'allotment_id' => 'int',
		'quantity' => 'int',
		'status' => 'bool',
		'room_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'created',
		'updated',
		'date'
	];

	protected $fillable = [
		'reservation_id',
		'reservation_details_id',
		'reseller_id',
		'allotment_id',
		'allotment_code',
		'quantity',
		'status',
		'note',
		'created',
		'updated',
		'date',
		'room_id',
		'active'
	];
}
