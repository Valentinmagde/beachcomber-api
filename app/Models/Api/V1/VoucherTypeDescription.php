<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherTypeDescription
 * 
 * @property int $ID
 * @property int $Voucher_Type_ID
 * @property int $Language_ID
 * @property string $description
 * @property Carbon $created
 * @property string|null $logo
 *
 * @package App\Models
 */
class VoucherTypeDescription extends Model
{
	protected $table = 'voucher_type_description';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Voucher_Type_ID' => 'int',
		'Language_ID' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'Voucher_Type_ID',
		'Language_ID',
		'description',
		'created',
		'logo'
	];
}
