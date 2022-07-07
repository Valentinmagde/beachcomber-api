<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerLog
 * 
 * @property int $id
 * @property string $change_alias
 * @property int $user_id
 * @property string|null $packet
 * @property Carbon $created
 * @property int $customer_id
 *
 * @package App\Models
 */
class CustomerLog extends Model
{
	protected $table = 'customer_log';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'customer_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'change_alias',
		'user_id',
		'packet',
		'created',
		'customer_id'
	];
}
