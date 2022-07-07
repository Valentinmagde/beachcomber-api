<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClubType
 * 
 * @property int $club_type_id
 * @property string $club_type
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ClubType extends Model
{
	protected $table = 'club_type';
	protected $primaryKey = 'club_type_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'club_type',
		'valid_from',
		'valid_to'
	];
}
