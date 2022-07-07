<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $news_id
 * @property int $news_category_id
 * @property Carbon $published_date
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string $thumbnail
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'news';
	protected $primaryKey = 'news_id';
	public $timestamps = false;

	protected $casts = [
		'news_category_id' => 'int'
	];

	protected $dates = [
		'published_date',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'news_category_id',
		'published_date',
		'valid_from',
		'valid_to',
		'thumbnail'
	];
}
