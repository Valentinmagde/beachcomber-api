<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmRateCardPublishLog
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property string $action
 * @property string $target
 * @property string $status
 * @property Carbon $timestamp
 * @property string|null $user
 *
 * @package App\Models
 */
class TariffRmRateCardPublishLog extends Model
{
	protected $table = 'tariff_rm_rate_card_publish_log';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int'
	];

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'rate_card_id',
		'action',
		'target',
		'status',
		'timestamp',
		'user'
	];
}
