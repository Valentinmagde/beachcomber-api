<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuisineType
 * 
 * @property int $type_id
 * @property string $type
 * @property int|null $type_active
 *
 * @package App\Models
 */
class CuisineType extends Model
{
	protected $table = 'cuisine_types';
	protected $primaryKey = 'type_id';
	public $timestamps = false;

	protected $casts = [
		'type_active' => 'int'
	];

	protected $fillable = [
		'type',
		'type_active'
	];
}
