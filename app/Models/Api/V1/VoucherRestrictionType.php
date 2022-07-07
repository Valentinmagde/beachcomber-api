<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherRestrictionType
 * 
 * @property int $ID
 * @property string $name
 * @property Carbon $created
 *
 * @package App\Models
 */
class VoucherRestrictionType extends Model
{
	protected $table = 'voucher_restriction_type';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'name',
		'created'
	];
}
