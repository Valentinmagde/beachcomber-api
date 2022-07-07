<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepeaterEmailLog
 * 
 * @property int $id
 * @property string $sent_to
 * @property int $emailing_id
 * @property Carbon $created
 *
 * @package App\Models
 */
class RepeaterEmailLog extends Model
{
	protected $table = 'repeater_email_log';
	public $timestamps = false;

	protected $casts = [
		'emailing_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'sent_to',
		'emailing_id',
		'created'
	];
}
