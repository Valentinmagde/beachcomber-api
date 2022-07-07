<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaTreatmentDescription
 * 
 * @property int $spa_treatment_desc_id
 * @property int $spa_treatment_id
 * @property int $language_id
 * @property string $description
 * @property string $treatment_name
 *
 * @package App\Models
 */
class SpaTreatmentDescription extends Model
{
	protected $table = 'spa_treatment_description';
	protected $primaryKey = 'spa_treatment_desc_id';
	public $timestamps = false;

	protected $casts = [
		'spa_treatment_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'spa_treatment_id',
		'language_id',
		'description',
		'treatment_name'
	];
}
