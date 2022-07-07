<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MipsTransactionLog
 * 
 * @property int $id
 * @property string $type
 * @property string $state
 * @property string|null $packet
 * @property Carbon $created
 *
 * @package App\Models
 */
class MipsTransactionLog extends Model
{
	protected $table = 'mips_transaction_log';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'type',
		'state',
		'packet',
		'created'
	];
}
