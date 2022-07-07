<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomCategoryDescription
 * 
 * @property int $room_category_desc_id
 * @property int $room_category_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class RoomCategoryDescription extends Model
{
	protected $table = 'room_category_description';
	protected $primaryKey = 'room_category_desc_id';
	public $timestamps = false;

	protected $casts = [
		'room_category_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'room_category_id',
		'language_id',
		'name'
	];
}
