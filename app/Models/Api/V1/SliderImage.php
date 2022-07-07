<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderImage
 * 
 * @property int $id
 * @property string|null $title
 * @property string $alt
 * @property string $filename
 * @property string|null $caption
 * @property int $alias_id
 * @property int|null $restricted_country_id
 * @property int|null $restricted_language_id
 * @property string|null $url
 * @property bool $is_booking_url
 * @property bool|null $is_url_target_blank
 * @property Carbon $created
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class SliderImage extends Model
{
	protected $table = 'slider_image';
	public $timestamps = false;

	protected $casts = [
		'alias_id' => 'int',
		'restricted_country_id' => 'int',
		'restricted_language_id' => 'int',
		'is_booking_url' => 'bool',
		'is_url_target_blank' => 'bool'
	];

	protected $dates = [
		'created',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'title',
		'alt',
		'filename',
		'caption',
		'alias_id',
		'restricted_country_id',
		'restricted_language_id',
		'url',
		'is_booking_url',
		'is_url_target_blank',
		'created',
		'valid_from',
		'valid_to'
	];
}
