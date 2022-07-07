<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherRestriction
 * 
 * @property int $ID
 * @property int|null $Voucher_Type_ID
 * @property int $Restriction_Type_ID
 * @property int $value
 * @property string $value_type
 * @property Carbon $created
 *
 * @package App\Models
 */
class VoucherRestriction extends Model
{
	protected $table = 'voucher_restriction';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Voucher_Type_ID' => 'int',
		'Restriction_Type_ID' => 'int',
		'value' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'Voucher_Type_ID',
		'Restriction_Type_ID',
		'value',
		'value_type',
		'created'
	];
}
