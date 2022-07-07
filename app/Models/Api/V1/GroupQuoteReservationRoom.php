<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationRoom
 * 
 * @property int $quote_reservation_room_id
 * @property int $quote_id
 * @property int $tariff_id
 * @property int $room_id
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property int|null $units
 * @property int $occupancy
 * @property float $gross_total
 * @property float $discount
 * @property string $disc_type
 * @property float $net_total
 * @property int|null $active
 * @property Carbon $created
 * @property int $created_by
 * @property Carbon|null $updated
 * @property int|null $updated_by
 * @property int $hotel_id
 * @property int $adult
 * @property int|null $children
 * @property bool $adult_sharing
 *
 * @package App\Models
 */
class GroupQuoteReservationRoom extends Model
{
	protected $table = 'group_quote_reservation_room';
	protected $primaryKey = 'quote_reservation_room_id';
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'int',
		'tariff_id' => 'int',
		'room_id' => 'int',
		'units' => 'int',
		'occupancy' => 'int',
		'gross_total' => 'float',
		'discount' => 'float',
		'net_total' => 'float',
		'active' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'hotel_id' => 'int',
		'adult' => 'int',
		'children' => 'int',
		'adult_sharing' => 'bool'
	];

	protected $dates = [
		'date_from',
		'date_to',
		'created',
		'updated'
	];

	protected $fillable = [
		'quote_id',
		'tariff_id',
		'room_id',
		'date_from',
		'date_to',
		'units',
		'occupancy',
		'gross_total',
		'discount',
		'disc_type',
		'net_total',
		'active',
		'created',
		'created_by',
		'updated',
		'updated_by',
		'hotel_id',
		'adult',
		'children',
		'adult_sharing'
	];
}
