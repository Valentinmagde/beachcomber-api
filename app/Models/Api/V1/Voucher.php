<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Voucher
 * 
 * @property int $ID
 * @property int $Voucher_Type_ID
 * @property string $code
 * @property bool $used
 * @property Carbon $created
 * @property float $voucher_amount
 * @property bool $is_sold
 * @property bool $is_allocated
 *
 * @package App\Models
 */
class Voucher extends Model
{
	protected $table = 'voucher';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Voucher_Type_ID' => 'int',
		'used' => 'bool',
		'voucher_amount' => 'float',
		'is_sold' => 'bool',
		'is_allocated' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'Voucher_Type_ID',
		'code',
		'used',
		'created',
		'voucher_amount',
		'is_sold',
		'is_allocated'
	];
}
