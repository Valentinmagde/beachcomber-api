<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaTreatmentType
 * 
 * @property int $spa_treatment_type_id
 * @property int $spa_id
 * @property int $spa_treatment_main_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class SpaTreatmentType extends Model
{
	protected $table = 'spa_treatment_type';
	protected $primaryKey = 'spa_treatment_type_id';
	public $timestamps = false;

	protected $casts = [
		'spa_id' => 'int',
		'spa_treatment_main_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'spa_id',
		'spa_treatment_main_id',
		'valid_from',
		'valid_to'
	];
}
