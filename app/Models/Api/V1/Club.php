<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Club
 * 
 * @property int $club_id
 * @property int $hotel_id
 * @property int $club_type_id
 * @property string $logo
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Club extends Model
{
	protected $table = 'club';
	protected $primaryKey = 'club_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'club_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'club_type_id',
		'logo',
		'valid_from',
		'valid_to'
	];
}
