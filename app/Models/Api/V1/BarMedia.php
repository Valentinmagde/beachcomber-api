<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BarMedia
 * 
 * @property int $bar_image_id
 * @property int $bar_id
 * @property string $bar_media_name
 * @property string $bar_media_title
 * @property string $bar_media_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class BarMedia extends Model
{
	protected $table = 'bar_media';
	protected $primaryKey = 'bar_image_id';
	public $timestamps = false;

	protected $casts = [
		'bar_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'bar_id',
		'bar_media_name',
		'bar_media_title',
		'bar_media_path',
		'valid_from',
		'valid_to'
	];
}
