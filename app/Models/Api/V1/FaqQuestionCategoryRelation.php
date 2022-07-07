<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqQuestionCategoryRelation
 * 
 * @property int $id
 * @property int $category_id
 * @property int $question_id
 * @property Carbon $created
 *
 * @package App\Models
 */
class FaqQuestionCategoryRelation extends Model
{
	protected $table = 'faq_question_category_relation';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'question_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'category_id',
		'question_id',
		'created'
	];
}
