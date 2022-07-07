<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherTypeOffer
 * 
 * @property int $ID
 * @property int $Voucher_Type_ID
 * @property int $Offer_Rebate_Type_ID
 * @property int $Discount_Type_ID
 * @property float $rebate_value
 * @property int $Currency_ID
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 * @property int $costDiscount
 *
 * @package App\Models
 */
class VoucherTypeOffer extends Model
{
	protected $table = 'voucher_type_offer';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Voucher_Type_ID' => 'int',
		'Offer_Rebate_Type_ID' => 'int',
		'Discount_Type_ID' => 'int',
		'rebate_value' => 'float',
		'Currency_ID' => 'int',
		'costDiscount' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'Voucher_Type_ID',
		'Offer_Rebate_Type_ID',
		'Discount_Type_ID',
		'rebate_value',
		'Currency_ID',
		'valid_from',
		'valid_to',
		'created',
		'costDiscount'
	];
}
