<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaTreatmentMainDescription
 * 
 * @property int $spa_treatment_main_desc_id
 * @property int $spa_treatment_main_id
 * @property int $language_id
 * @property string $description
 * @property string|null $long_description
 *
 * @package App\Models
 */
class SpaTreatmentMainDescription extends Model
{
	protected $table = 'spa_treatment_main_description';
	protected $primaryKey = 'spa_treatment_main_desc_id';
	public $timestamps = false;

	protected $casts = [
		'spa_treatment_main_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'spa_treatment_main_id',
		'language_id',
		'description',
		'long_description'
	];
}
