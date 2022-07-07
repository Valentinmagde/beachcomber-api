<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentCondition
 * 
 * @property int $id
 * @property int $id_hotel
 * @property int $id_room
 * @property int $client_type_id
 * @property string $release_type
 * @property int $no_days
 * @property Carbon $specific_date
 * @property string $comment
 * @property int $units
 * @property int $allotment_for
 * @property int $active
 * @property Carbon $refill_date
 * @property int $type
 * @property int $tariff_period_id
 * @property varbinary|null $code
 * @property Carbon|null $arrival
 * @property Carbon|null $departure
 * @property int|null $nights
 * @property int|null $reseller_id
 * @property int|null $company_id
 * @property string|null $note
 *
 * @package App\Models
 */
class RoomAllotmentCondition extends Model
{
	protected $table = 'room_allotment_conditions';
	public $timestamps = false;

	protected $casts = [
		'id_hotel' => 'int',
		'id_room' => 'int',
		'client_type_id' => 'int',
		'no_days' => 'int',
		'units' => 'int',
		'allotment_for' => 'int',
		'active' => 'int',
		'type' => 'int',
		'tariff_period_id' => 'int',
		'code' => 'varbinary',
		'nights' => 'int',
		'reseller_id' => 'int',
		'company_id' => 'int'
	];

	protected $dates = [
		'specific_date',
		'refill_date',
		'arrival',
		'departure'
	];

	protected $fillable = [
		'id_hotel',
		'id_room',
		'client_type_id',
		'release_type',
		'no_days',
		'specific_date',
		'comment',
		'units',
		'allotment_for',
		'active',
		'refill_date',
		'type',
		'tariff_period_id',
		'code',
		'arrival',
		'departure',
		'nights',
		'reseller_id',
		'company_id',
		'note'
	];
}
