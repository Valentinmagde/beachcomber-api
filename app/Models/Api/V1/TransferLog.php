<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferLog
 * 
 * @property int $id
 * @property string $status
 * @property string $data_packet
 * @property Carbon $created
 *
 * @package App\Models
 */
class TransferLog extends Model
{
	protected $table = 'transfer_log';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'status',
		'data_packet',
		'created'
	];
}
