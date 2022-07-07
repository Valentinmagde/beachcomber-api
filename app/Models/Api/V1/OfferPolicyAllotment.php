<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferPolicyAllotment
 * 
 * @property int $offer_allotment_policy_id
 * @property int $offer_id
 * @property int $allotment_condition_type
 * @property int $allotment_from
 * @property int $allotment_to
 *
 * @package App\Models
 */
class OfferPolicyAllotment extends Model
{
	protected $table = 'offer_policy_allotment';
	protected $primaryKey = 'offer_allotment_policy_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'allotment_condition_type' => 'int',
		'allotment_from' => 'int',
		'allotment_to' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'allotment_condition_type',
		'allotment_from',
		'allotment_to'
	];
}
