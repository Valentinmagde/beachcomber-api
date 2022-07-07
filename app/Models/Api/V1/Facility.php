<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Facility
 * 
 * @property int $facility_id
 * @property string $icon
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Facility extends Model
{
	protected $table = 'facility';
	protected $primaryKey = 'facility_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'icon',
		'valid_from',
		'valid_to'
	];
}
