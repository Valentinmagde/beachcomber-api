<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerRemark
 * 
 * @property int $customer_remarks_id
 * @property int $customer_id
 * @property int $customer_remarks_type_id
 * @property bool $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class CustomerRemark extends Model
{
	protected $table = 'customer_remarks';
	protected $primaryKey = 'customer_remarks_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'customer_remarks_type_id' => 'int',
		'active' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'customer_id',
		'customer_remarks_type_id',
		'active',
		'valid_from',
		'valid_to'
	];
}
