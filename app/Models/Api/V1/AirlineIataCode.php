<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AirlineIataCode
 * 
 * @property int $airline_id
 * @property string|null $airline_name
 * @property string $airline_iata_code
 *
 * @package App\Models
 */
class AirlineIataCode extends Model
{
	protected $table = 'airline_iata_codes';
	protected $primaryKey = 'airline_id';
	public $timestamps = false;

	protected $fillable = [
		'airline_name',
		'airline_iata_code'
	];
}
