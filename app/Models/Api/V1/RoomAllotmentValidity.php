<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentValidity
 * 
 * @property int $id
 * @property int $allotment_id
 * @property Carbon $date_from
 * @property Carbon $date_to
 *
 * @package App\Models
 */
class RoomAllotmentValidity extends Model
{
	protected $table = 'room_allotment_validity';
	public $timestamps = false;

	protected $casts = [
		'allotment_id' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'allotment_id',
		'date_from',
		'date_to'
	];
}
