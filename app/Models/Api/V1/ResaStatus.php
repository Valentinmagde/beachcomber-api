<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ResaStatus
 * 
 * @property int $resa_status_id
 * @property string|null $resa_status
 * @property int|null $htng_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ResaStatus extends Model
{
	protected $table = 'resa_status';
	protected $primaryKey = 'resa_status_id';
	public $timestamps = false;

	protected $casts = [
		'htng_code' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'resa_status',
		'htng_code',
		'valid_from',
		'valid_to'
	];
}
