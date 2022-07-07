<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GolfHole
 * 
 * @property int $Hole_id
 * @property float $Distance
 * @property float $Hole_Coordinate_x
 * @property float $Hole_Coordinate_y
 *
 * @package App\Models
 */
class GolfHole extends Model
{
	protected $table = 'golf_hole';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Hole_id' => 'int',
		'Distance' => 'float',
		'Hole_Coordinate_x' => 'float',
		'Hole_Coordinate_y' => 'float'
	];

	protected $fillable = [
		'Hole_id',
		'Distance',
		'Hole_Coordinate_x',
		'Hole_Coordinate_y'
	];
}
