<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsDescription
 * 
 * @property int $news_desc_id
 * @property int $news_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 * @property string $short_description
 * @property string $link_text
 * @property string $news_link
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class NewsDescription extends Model
{
	protected $table = 'news_description';
	protected $primaryKey = 'news_desc_id';
	public $timestamps = false;

	protected $casts = [
		'news_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'news_id',
		'language_id',
		'title',
		'description',
		'short_description',
		'link_text',
		'news_link',
		'valid_from',
		'valid_to'
	];
}
