<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationTransferLog
 * 
 * @property int $transaction_id
 * @property int $reservation_id
 * @property int $dossier_id
 * @property string $status
 * @property string|null $data_packet
 * @property Carbon $created
 *
 * @package App\Models
 */
class ReservationTransferLog extends Model
{
	protected $table = 'reservation_transfer_log';
	protected $primaryKey = 'transaction_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'dossier_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'reservation_id',
		'dossier_id',
		'status',
		'data_packet',
		'created'
	];
}
