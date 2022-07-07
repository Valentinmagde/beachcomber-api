<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepeaterFileLog
 * 
 * @property int $id
 * @property string $filename
 * @property int $added
 * @property int|null $lines_entered
 * @property Carbon $created
 *
 * @package App\Models
 */
class RepeaterFileLog extends Model
{
	protected $table = 'repeater_file_log';
	public $timestamps = false;

	protected $casts = [
		'added' => 'int',
		'lines_entered' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'filename',
		'added',
		'lines_entered',
		'created'
	];
}
