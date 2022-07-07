<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ratetigerreservation
 * 
 * @property int $rt_reservation_id
 * @property int $reservation_id
 * @property int $unique_id
 * @property int $hotel_reservation_id
 * @property string $hotel_code
 * @property int $hotel_id
 * @property Carbon $createDateTime
 * @property float|null $rtTotal
 * @property float|null $rtTaxes
 *
 * @package App\Models
 */
class Ratetigerreservation extends Model
{
	protected $table = 'ratetigerreservation';
	protected $primaryKey = 'rt_reservation_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'unique_id' => 'int',
		'hotel_reservation_id' => 'int',
		'hotel_id' => 'int',
		'rtTotal' => 'float',
		'rtTaxes' => 'float'
	];

	protected $dates = [
		'createDateTime'
	];

	protected $fillable = [
		'reservation_id',
		'unique_id',
		'hotel_reservation_id',
		'hotel_code',
		'hotel_id',
		'createDateTime',
		'rtTotal',
		'rtTaxes'
	];
}
