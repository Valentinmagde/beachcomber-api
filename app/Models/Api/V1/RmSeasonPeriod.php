<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmSeasonPeriod
 * 
 * @property int $id
 * @property int $season_id
 * @property int $type_id
 * @property Carbon $date_from
 * @property Carbon $date_to
 *
 * @package App\Models
 */
class RmSeasonPeriod extends Model
{
	protected $table = 'rm_season_period';
	public $timestamps = false;

	protected $casts = [
		'season_id' => 'int',
		'type_id' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'season_id',
		'type_id',
		'date_from',
		'date_to'
	];
}
