<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqAnswerDescription
 * 
 * @property int $id
 * @property int $answer_id
 * @property int $language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class FaqAnswerDescription extends Model
{
	protected $table = 'faq_answer_description';
	public $timestamps = false;

	protected $casts = [
		'answer_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'answer_id',
		'language_id',
		'description'
	];
}
