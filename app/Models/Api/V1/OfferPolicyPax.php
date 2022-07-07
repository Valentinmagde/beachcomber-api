<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferPolicyPax
 * 
 * @property int $offer_pax_policy_id
 * @property int $offer_id
 * @property string $pax_condition_type
 * @property int $adult_pax
 * @property int|null $min_adult_pax
 * @property int $child_pax
 * @property int|null $min_child_pax
 * @property int $teen_pax
 * @property int|null $min_teen_pax
 *
 * @package App\Models
 */
class OfferPolicyPax extends Model
{
	protected $table = 'offer_policy_pax';
	protected $primaryKey = 'offer_pax_policy_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'adult_pax' => 'int',
		'min_adult_pax' => 'int',
		'child_pax' => 'int',
		'min_child_pax' => 'int',
		'teen_pax' => 'int',
		'min_teen_pax' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'pax_condition_type',
		'adult_pax',
		'min_adult_pax',
		'child_pax',
		'min_child_pax',
		'teen_pax',
		'min_teen_pax'
	];
}
