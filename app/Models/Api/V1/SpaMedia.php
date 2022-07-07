<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaMedia
 * 
 * @property int $spa_image_id
 * @property int $spa_id
 * @property string $spa_media_name
 * @property string $spa_media_title
 * @property string $spa_media_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class SpaMedia extends Model
{
	protected $table = 'spa_media';
	protected $primaryKey = 'spa_image_id';
	public $timestamps = false;

	protected $casts = [
		'spa_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'spa_id',
		'spa_media_name',
		'spa_media_title',
		'spa_media_path',
		'valid_from',
		'valid_to'
	];
}
