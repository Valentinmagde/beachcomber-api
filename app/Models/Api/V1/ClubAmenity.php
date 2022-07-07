<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClubAmenity
 * 
 * @property int $club_amenity_id
 * @property int $amenity_id
 * @property int $club_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ClubAmenity extends Model
{
	protected $table = 'club_amenity';
	protected $primaryKey = 'club_amenity_id';
	public $timestamps = false;

	protected $casts = [
		'amenity_id' => 'int',
		'club_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'amenity_id',
		'club_id',
		'valid_from',
		'valid_to'
	];
}
