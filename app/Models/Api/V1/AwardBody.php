<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AwardBody
 * 
 * @property int $award_body_id
 * @property string|null $award_body
 * @property int|null $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class AwardBody extends Model
{
	protected $table = 'award_body';
	protected $primaryKey = 'award_body_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'award_body',
		'active',
		'valid_from',
		'valid_to'
	];
}
