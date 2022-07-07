<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RateImportProcess
 * 
 * @property int $process_id
 * @property Carbon $process_for_business_date
 * @property string $event_type
 * @property string $process_event_message
 * @property int|null $hotel_id
 * @property string|null $hotel_name
 * @property string|null $marketingPeriod
 * @property string|null $market
 * @property string|null $currency
 * @property Carbon $process_event_timestamp
 *
 * @package App\Models
 */
class RateImportProcess extends Model
{
	protected $table = 'rate_import_process';
	protected $primaryKey = 'process_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $dates = [
		'process_for_business_date',
		'process_event_timestamp'
	];

	protected $fillable = [
		'process_for_business_date',
		'event_type',
		'process_event_message',
		'hotel_id',
		'hotel_name',
		'marketingPeriod',
		'market',
		'currency',
		'process_event_timestamp'
	];
}
