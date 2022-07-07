<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Amenity
 * 
 * @property int $amenity_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $amenity_type_id
 * @property bool $has_coach
 *
 * @package App\Models
 */
class Amenity extends Model
{
	protected $table = 'amenity';
	protected $primaryKey = 'amenity_id';
	public $timestamps = false;

	protected $casts = [
		'amenity_type_id' => 'int',
		'has_coach' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to',
		'amenity_type_id',
		'has_coach'
	];
}
