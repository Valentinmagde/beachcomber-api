<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsCategory
 * 
 * @property int $news_category_id
 * @property string|null $news_category
 *
 * @package App\Models
 */
class NewsCategory extends Model
{
	protected $table = 'news_category';
	protected $primaryKey = 'news_category_id';
	public $timestamps = false;

	protected $fillable = [
		'news_category'
	];
}
