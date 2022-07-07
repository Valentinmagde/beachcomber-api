<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChefRecipeMedia
 * 
 * @property int $chef_recipe_image_id
 * @property int $chef_recipe_id
 * @property string $chef_recipe_media_name
 * @property string $chef_recipe_media_title
 * @property string $chef_recipe_media_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ChefRecipeMedia extends Model
{
	protected $table = 'chef_recipe_media';
	protected $primaryKey = 'chef_recipe_image_id';
	public $timestamps = false;

	protected $casts = [
		'chef_recipe_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'chef_recipe_id',
		'chef_recipe_media_name',
		'chef_recipe_media_title',
		'chef_recipe_media_path',
		'valid_from',
		'valid_to'
	];
}
