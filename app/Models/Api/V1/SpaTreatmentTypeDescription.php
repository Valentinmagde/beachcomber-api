<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaTreatmentTypeDescription
 * 
 * @property int $spa_treatment_type_desc_id
 * @property int $spa_treatment_type_id
 * @property int $language_id
 * @property string $description
 * @property string $short_description
 * @property string $category_name
 *
 * @package App\Models
 */
class SpaTreatmentTypeDescription extends Model
{
	protected $table = 'spa_treatment_type_description';
	protected $primaryKey = 'spa_treatment_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'spa_treatment_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'spa_treatment_type_id',
		'language_id',
		'description',
		'short_description',
		'category_name'
	];
}
