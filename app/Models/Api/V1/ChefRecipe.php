<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChefRecipe
 * 
 * @property int $recipe_id
 * @property int $chef_id
 * @property int $hotel_id
 * @property int $restaurant_id
 * @property string $recipe_name
 * @property string $recipe_img
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ChefRecipe extends Model
{
	protected $table = 'chef_recipe';
	protected $primaryKey = 'recipe_id';
	public $timestamps = false;

	protected $casts = [
		'chef_id' => 'int',
		'hotel_id' => 'int',
		'restaurant_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'chef_id',
		'hotel_id',
		'restaurant_id',
		'recipe_name',
		'recipe_img',
		'valid_from',
		'valid_to'
	];
}
