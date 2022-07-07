<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmMealType
 * 
 * @property int $id
 * @property string $name
 * @property int|null $sort_order
 * @property int|null $default
 * @property int|null $hotel_id
 * @property int $active
 *
 * @package App\Models
 */
class RmMealType extends Model
{
	protected $table = 'rm_meal_type';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'default' => 'int',
		'hotel_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'sort_order',
		'default',
		'hotel_id',
		'active'
	];
}
