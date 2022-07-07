<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MealFormula
 * 
 * @property int $formula_id
 * @property string $formula
 * @property int|null $formula_active
 *
 * @package App\Models
 */
class MealFormula extends Model
{
	protected $table = 'meal_formula';
	protected $primaryKey = 'formula_id';
	public $timestamps = false;

	protected $casts = [
		'formula_active' => 'int'
	];

	protected $fillable = [
		'formula',
		'formula_active'
	];
}
