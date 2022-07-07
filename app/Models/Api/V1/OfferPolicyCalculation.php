<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferPolicyCalculation
 * 
 * @property int $offer_calculation_policy_id
 * @property int $offer_id
 * @property string $offer_applicable_on
 * @property int $offer_calculation_rank
 *
 * @package App\Models
 */
class OfferPolicyCalculation extends Model
{
	protected $table = 'offer_policy_calculation';
	protected $primaryKey = 'offer_calculation_policy_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'offer_calculation_rank' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'offer_applicable_on',
		'offer_calculation_rank'
	];
}
