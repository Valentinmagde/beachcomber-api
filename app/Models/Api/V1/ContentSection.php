<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentSection
 * 
 * @property int $section_id
 * @property int $page_id
 * @property string|null $section_name
 * @property string|null $source
 * @property string $image_folder
 * @property int $is_short
 * @property int|null $value_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $content_associated_id
 *
 * @package App\Models
 */
class ContentSection extends Model
{
	protected $table = 'content_section';
	protected $primaryKey = 'section_id';
	public $timestamps = false;

	protected $casts = [
		'page_id' => 'int',
		'is_short' => 'int',
		'value_id' => 'int',
		'content_associated_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'page_id',
		'section_name',
		'source',
		'image_folder',
		'is_short',
		'value_id',
		'valid_from',
		'valid_to',
		'content_associated_id'
	];
}
