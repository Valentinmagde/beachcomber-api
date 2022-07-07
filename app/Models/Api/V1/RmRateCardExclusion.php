<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmRateCardExclusion
 * 
 * @property int $rate_card_exclude_id
 * @property int|null $rate_card_id
 *
 * @package App\Models
 */
class RmRateCardExclusion extends Model
{
	protected $table = 'rm_rate_card_exclusion';
	protected $primaryKey = 'rate_card_exclude_id';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int'
	];

	protected $fillable = [
		'rate_card_id'
	];
}
