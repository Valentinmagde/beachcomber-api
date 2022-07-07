<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OtaHotelCommission
 * 
 * @property int $id
 * @property int $hotel_id
 * @property int $ota_id
 * @property float $commission
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 *
 * @package App\Models
 */
class OtaHotelCommission extends Model
{
	protected $table = 'ota_hotel_commission';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'ota_id' => 'int',
		'commission' => 'float'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'hotel_id',
		'ota_id',
		'commission',
		'valid_from',
		'valid_to',
		'created'
	];
}
