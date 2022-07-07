<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqCategoryDescription
 * 
 * @property int $id
 * @property int $category_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class FaqCategoryDescription extends Model
{
	protected $table = 'faq_category_description';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'language_id',
		'description'
	];
}
