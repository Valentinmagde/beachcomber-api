<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChefMedia
 * 
 * @property int $chef_image_id
 * @property int $chef_id
 * @property string $chef_media_name
 * @property string $chef_media_title
 * @property string $chef_media_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ChefMedia extends Model
{
	protected $table = 'chef_media';
	protected $primaryKey = 'chef_image_id';
	public $timestamps = false;

	protected $casts = [
		'chef_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'chef_id',
		'chef_media_name',
		'chef_media_title',
		'chef_media_path',
		'valid_from',
		'valid_to'
	];
}
