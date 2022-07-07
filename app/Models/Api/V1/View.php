<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class View
 * 
 * @property int $view_id
 * @property string $view_name
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class View extends Model
{
	protected $table = 'view';
	protected $primaryKey = 'view_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'view_name',
		'valid_from',
		'valid_to'
	];
}
