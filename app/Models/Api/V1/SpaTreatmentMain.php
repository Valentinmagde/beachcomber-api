<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaTreatmentMain
 * 
 * @property int $spa_treatment_main_id
 * @property int $spa_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string|null $spa_treatment_image
 * @property bool $is_treatment
 *
 * @package App\Models
 */
class SpaTreatmentMain extends Model
{
	protected $table = 'spa_treatment_main';
	protected $primaryKey = 'spa_treatment_main_id';
	public $timestamps = false;

	protected $casts = [
		'spa_id' => 'int',
		'is_treatment' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'spa_id',
		'valid_from',
		'valid_to',
		'spa_treatment_image',
		'is_treatment'
	];
}
