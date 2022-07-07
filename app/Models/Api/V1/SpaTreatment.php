<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaTreatment
 * 
 * @property int $spa_treatment_id
 * @property int $spa_treatment_type_id
 * @property float $price
 * @property string $currency
 * @property int $duration
 * @property int $duration_type_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property bool|null $is_treatment
 *
 * @package App\Models
 */
class SpaTreatment extends Model
{
	protected $table = 'spa_treatment';
	protected $primaryKey = 'spa_treatment_id';
	public $timestamps = false;

	protected $casts = [
		'spa_treatment_type_id' => 'int',
		'price' => 'float',
		'duration' => 'int',
		'duration_type_id' => 'int',
		'is_treatment' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'spa_treatment_type_id',
		'price',
		'currency',
		'duration',
		'duration_type_id',
		'valid_from',
		'valid_to',
		'is_treatment'
	];
}
