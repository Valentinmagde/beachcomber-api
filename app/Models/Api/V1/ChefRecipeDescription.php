<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChefRecipeDescription
 * 
 * @property int $recipe_desc_id
 * @property int $recipe_id
 * @property int $language_id
 * @property string $recipe_name
 * @property string $ingredients
 * @property string $preparation
 *
 * @package App\Models
 */
class ChefRecipeDescription extends Model
{
	protected $table = 'chef_recipe_description';
	protected $primaryKey = 'recipe_desc_id';
	public $timestamps = false;

	protected $casts = [
		'recipe_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'recipe_id',
		'language_id',
		'recipe_name',
		'ingredients',
		'preparation'
	];
}
