<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelTriptease
 * 
 * @property int $id
 * @property int $hotel_id
 * @property string $client_id
 * @property string $api_key
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 *
 * @package App\Models
 */
class HotelTriptease extends Model
{
	protected $table = 'hotel_triptease';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'hotel_id',
		'client_id',
		'api_key',
		'valid_from',
		'valid_to',
		'created'
	];
}
