<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Excursion
 * 
 * @property int $excursion_id
 * @property string $excursion_name
 * @property int $country_id
 * @property int|null $region_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Excursion extends Model
{
	protected $table = 'excursion';
	protected $primaryKey = 'excursion_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'region_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'excursion_name',
		'country_id',
		'region_id',
		'valid_from',
		'valid_to'
	];
}
