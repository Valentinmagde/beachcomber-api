<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqQuestion
 * 
 * @property int $question_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 * @property bool $featured
 * @property int|null $weight
 *
 * @package App\Models
 */
class FaqQuestion extends Model
{
	protected $table = 'faq_question';
	protected $primaryKey = 'question_id';
	public $timestamps = false;

	protected $casts = [
		'featured' => 'bool',
		'weight' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'valid_from',
		'valid_to',
		'created',
		'featured',
		'weight'
	];
}
