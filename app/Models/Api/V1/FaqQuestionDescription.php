<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqQuestionDescription
 * 
 * @property int $id
 * @property int $question_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class FaqQuestionDescription extends Model
{
	protected $table = 'faq_question_description';
	public $timestamps = false;

	protected $casts = [
		'question_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'question_id',
		'language_id',
		'description'
	];
}
