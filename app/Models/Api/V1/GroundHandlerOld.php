<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroundHandlerOld
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $active
 *
 * @package App\Models
 */
class GroundHandlerOld extends Model
{
	protected $table = 'ground_handler_old';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'email',
		'active'
	];
}
