<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqAnswer
 * 
 * @property int $id
 * @property int $answer_id
 * @property int $question_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 * @property int|null $weight
 *
 * @package App\Models
 */
class FaqAnswer extends Model
{
	protected $table = 'faq_answer';
	public $timestamps = false;

	protected $casts = [
		'answer_id' => 'int',
		'question_id' => 'int',
		'weight' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'answer_id',
		'question_id',
		'valid_from',
		'valid_to',
		'created',
		'weight'
	];
}
