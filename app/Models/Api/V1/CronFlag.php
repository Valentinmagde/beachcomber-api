<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CronFlag
 * 
 * @property int $cron_flag_id
 * @property string|null $name
 * @property bool|null $running
 * @property Carbon|null $last_ran
 *
 * @package App\Models
 */
class CronFlag extends Model
{
	protected $table = 'cron_flag';
	protected $primaryKey = 'cron_flag_id';
	public $timestamps = false;

	protected $casts = [
		'running' => 'bool'
	];

	protected $dates = [
		'last_ran'
	];

	protected $fillable = [
		'name',
		'running',
		'last_ran'
	];
}
