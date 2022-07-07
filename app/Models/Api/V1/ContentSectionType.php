<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentSectionType
 * 
 * @property int $content_section_type_id
 * @property string|null $content_section_type
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int|null $active
 *
 * @package App\Models
 */
class ContentSectionType extends Model
{
	protected $table = 'content_section_type';
	protected $primaryKey = 'content_section_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'content_section_type',
		'valid_from',
		'valid_to',
		'active'
	];
}
