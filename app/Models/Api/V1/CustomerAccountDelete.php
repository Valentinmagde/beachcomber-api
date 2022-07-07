<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerAccountDelete
 * 
 * @property int $id
 * @property int $customer_login_id
 * @property int $reason_id
 * @property string $data
 * @property Carbon $created
 *
 * @package App\Models
 */
class CustomerAccountDelete extends Model
{
	protected $table = 'customer_account_delete';
	public $timestamps = false;

	protected $casts = [
		'customer_login_id' => 'int',
		'reason_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'customer_login_id',
		'reason_id',
		'data',
		'created'
	];
}
