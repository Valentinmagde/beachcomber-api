<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsImage
 * 
 * @property int $news_image_id
 * @property int $news_id
 * @property string $image_name
 * @property string $image_path
 * @property string $image_url
 * @property bool $in_gallery
 * @property bool $is_thumbnail
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class NewsImage extends Model
{
	protected $table = 'news_image';
	protected $primaryKey = 'news_image_id';
	public $timestamps = false;

	protected $casts = [
		'news_id' => 'int',
		'in_gallery' => 'bool',
		'is_thumbnail' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'news_id',
		'image_name',
		'image_path',
		'image_url',
		'in_gallery',
		'is_thumbnail',
		'valid_from',
		'valid_to'
	];
}
