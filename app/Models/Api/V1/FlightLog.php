<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightLog
 * 
 * @property int $id
 * @property int|null $devis_id
 * @property int|null $quote_id
 * @property int|null $quote_room_id
 * @property int|null $code
 * @property string|null $status
 * @property string|null $packet
 * @property Carbon $created
 *
 * @package App\Models
 */
class FlightLog extends Model
{
	protected $table = 'flight_log';
	public $timestamps = false;

	protected $casts = [
		'devis_id' => 'int',
		'quote_id' => 'int',
		'quote_room_id' => 'int',
		'code' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'devis_id',
		'quote_id',
		'quote_room_id',
		'code',
		'status',
		'packet',
		'created'
	];
}
