<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RatemanagerImportFlag
 * 
 * @property int $id
 * @property int|null $rm_rate_card_id
 * @property int|null $rm_meal_rate_card_id
 * @property int|null $rm_offer_id
 * @property string $step
 * @property Carbon $timestamp
 * @property int $processing_flag
 *
 * @package App\Models
 */
class RatemanagerImportFlag extends Model
{
	protected $table = 'ratemanager_import_flag';
	public $timestamps = false;

	protected $casts = [
		'rm_rate_card_id' => 'int',
		'rm_meal_rate_card_id' => 'int',
		'rm_offer_id' => 'int',
		'processing_flag' => 'int'
	];

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'rm_rate_card_id',
		'rm_meal_rate_card_id',
		'rm_offer_id',
		'step',
		'timestamp',
		'processing_flag'
	];
}
