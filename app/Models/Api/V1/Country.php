<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $country_id
 * @property string $name
 * @property string $iso_code
 * @property string $iso_code_2
 * @property string $iso_code_3
 * @property string|null $phone_country_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'country';
	protected $primaryKey = 'country_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'name',
		'iso_code',
		'iso_code_2',
		'iso_code_3',
		'phone_country_code',
		'valid_from',
		'valid_to'
	];
}
