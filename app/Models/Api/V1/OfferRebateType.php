<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRebateType
 * 
 * @property int $offer_rebate_type_id
 * @property string $rebate_type
 * @property int $rebate_type_order
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class OfferRebateType extends Model
{
	protected $table = 'offer_rebate_type';
	protected $primaryKey = 'offer_rebate_type_id';
	public $timestamps = false;

	protected $casts = [
		'rebate_type_order' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'rebate_type',
		'rebate_type_order',
		'valid_from',
		'valid_to'
	];
}
