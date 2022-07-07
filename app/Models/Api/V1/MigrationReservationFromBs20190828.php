<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MigrationReservationFromBs20190828
 * 
 * @property int $Reservation_id
 * @property string|null $Starlight_ref
 * @property int|null $hotel_id
 *
 * @package App\Models
 */
class MigrationReservationFromBs20190828 extends Model
{
	protected $table = 'migration_reservation_from_bs_20190828';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Reservation_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $fillable = [
		'Reservation_id',
		'Starlight_ref',
		'hotel_id'
	];
}
