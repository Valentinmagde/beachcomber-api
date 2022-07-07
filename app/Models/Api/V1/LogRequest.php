<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogRequest
 * 
 * @property int $id
 * @property string $controller
 * @property string $action
 * @property string $data
 * @property Carbon $created
 *
 * @package App\Models
 */
class LogRequest extends Model
{
	protected $table = 'log_request';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'controller',
		'action',
		'data',
		'created'
	];
}
