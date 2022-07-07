<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMedia
 * 
 * @property int $media_id
 * @property int $media_type_id
 * @property int $media_theme_id
 * @property int $hotel_id
 * @property string $media_name
 * @property string $media_code
 * @property string $media_target
 * @property Carbon $media_uploadDate
 * @property string $media_filename
 * @property string $media_filesize
 * @property string $media_resolution
 * @property string $media_thumbnail
 * @property int|null $media_default
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelMedia extends Model
{
	protected $table = 'hotel_media';
	protected $primaryKey = 'media_id';
	public $timestamps = false;

	protected $casts = [
		'media_type_id' => 'int',
		'media_theme_id' => 'int',
		'hotel_id' => 'int',
		'media_default' => 'int'
	];

	protected $dates = [
		'media_uploadDate',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'media_type_id',
		'media_theme_id',
		'hotel_id',
		'media_name',
		'media_code',
		'media_target',
		'media_uploadDate',
		'media_filename',
		'media_filesize',
		'media_resolution',
		'media_thumbnail',
		'media_default',
		'valid_from',
		'valid_to'
	];
}
