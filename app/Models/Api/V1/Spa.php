<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Spa
 * 
 * @property int $spa_id
 * @property int $hotel_id
 * @property string $spa_name
 * @property string $spa_image
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property bool|null $is_spa
 * @property bool|null $is_wellness
 *
 * @package App\Models
 */
class Spa extends Model
{
	protected $table = 'spa';
	protected $primaryKey = 'spa_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'is_spa' => 'bool',
		'is_wellness' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'spa_name',
		'spa_image',
		'valid_from',
		'valid_to',
		'is_spa',
		'is_wellness'
	];
}
