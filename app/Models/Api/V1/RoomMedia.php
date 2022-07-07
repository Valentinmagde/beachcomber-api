<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomMedia
 * 
 * @property int $room_image_id
 * @property int $room_id
 * @property string $room_media_name
 * @property string $room_media_title
 * @property string $room_media_path
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomMedia extends Model
{
	protected $table = 'room_media';
	protected $primaryKey = 'room_image_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'room_media_name',
		'room_media_title',
		'room_media_path',
		'valid_from',
		'valid_to'
	];
}
