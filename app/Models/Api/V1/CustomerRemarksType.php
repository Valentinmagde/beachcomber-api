<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerRemarksType
 * 
 * @property int $customer_remarks_type_id
 * @property string|null $customer_remarks_type
 * @property bool $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class CustomerRemarksType extends Model
{
	protected $table = 'customer_remarks_type';
	protected $primaryKey = 'customer_remarks_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'customer_remarks_type',
		'active',
		'valid_from',
		'valid_to'
	];
}
