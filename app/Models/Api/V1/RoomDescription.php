<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomDescription
 * 
 * @property int $room_desc_id
 * @property int $room_id
 * @property int $language_id
 * @property string $name
 * @property string $name_alias
 * @property string $short_description
 * @property string $description
 * @property string $usp_description
 * @property string $interleading_description
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomDescription extends Model
{
	protected $table = 'room_description';
	protected $primaryKey = 'room_desc_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'language_id',
		'name',
		'name_alias',
		'short_description',
		'description',
		'usp_description',
		'interleading_description',
		'valid_from',
		'valid_to'
	];
}
