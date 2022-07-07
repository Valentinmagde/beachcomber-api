<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MigrationReservationStarlightHm
 * 
 * @property int $ID
 * @property int $Reservation_ID
 * @property int $Hotel_ID
 * @property string|null $starlight_interface_type
 * @property Carbon|null $processed
 * @property bool $is_exported
 * @property Carbon $created
 * @property bool $to_be_migrated
 *
 * @package App\Models
 */
class MigrationReservationStarlightHm extends Model
{
	protected $table = 'migration_reservation_starlight_hms';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Reservation_ID' => 'int',
		'Hotel_ID' => 'int',
		'is_exported' => 'bool',
		'to_be_migrated' => 'bool'
	];

	protected $dates = [
		'processed',
		'created'
	];

	protected $fillable = [
		'Reservation_ID',
		'Hotel_ID',
		'starlight_interface_type',
		'processed',
		'is_exported',
		'created',
		'to_be_migrated'
	];
}
