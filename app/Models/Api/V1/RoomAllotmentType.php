<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentType
 * 
 * @property int $id
 * @property string $type
 * @property bool $active
 *
 * @package App\Models
 */
class RoomAllotmentType extends Model
{
	protected $table = 'room_allotment_type';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool'
	];

	protected $fillable = [
		'type',
		'active'
	];
}
