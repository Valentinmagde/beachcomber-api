<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightAirportDescription
 * 
 * @property int $airport_desc_id
 * @property int|null $airport_id
 * @property string|null $airport_name
 * @property int|null $language_id
 *
 * @package App\Models
 */
class FlightAirportDescription extends Model
{
	protected $table = 'flight_airport_description';
	protected $primaryKey = 'airport_desc_id';
	public $timestamps = false;

	protected $casts = [
		'airport_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'airport_id',
		'airport_name',
		'language_id'
	];
}
