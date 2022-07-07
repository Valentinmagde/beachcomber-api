<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MealFormulaDescription
 * 
 * @property int $formula_desc_id
 * @property int $formula_id
 * @property int $language_id
 * @property string $description
 * @property int|null $formula_desc_active
 *
 * @package App\Models
 */
class MealFormulaDescription extends Model
{
	protected $table = 'meal_formula_description';
	protected $primaryKey = 'formula_desc_id';
	public $timestamps = false;

	protected $casts = [
		'formula_id' => 'int',
		'language_id' => 'int',
		'formula_desc_active' => 'int'
	];

	protected $fillable = [
		'formula_id',
		'language_id',
		'description',
		'formula_desc_active'
	];
}
