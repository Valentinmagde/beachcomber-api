<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feature
 * 
 * @property int $feature_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Feature extends Model
{
	protected $table = 'feature';
	protected $primaryKey = 'feature_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to'
	];
}
