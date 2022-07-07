<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherType
 * 
 * @property int $ID
 * @property bool $status
 * @property string $prefix
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 *
 * @package App\Models
 */
class VoucherType extends Model
{
	protected $table = 'voucher_type';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'status',
		'prefix',
		'valid_from',
		'valid_to',
		'created'
	];
}
