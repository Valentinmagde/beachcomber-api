<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmRateCardPolicy
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $policy_id
 *
 * @package App\Models
 */
class TariffRmRateCardPolicy extends Model
{
	protected $table = 'tariff_rm_rate_card_policy';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'policy_id' => 'int'
	];

	protected $fillable = [
		'rate_card_id',
		'policy_id'
	];
}
