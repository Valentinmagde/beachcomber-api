<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentAgency
 * 
 * @property int $id
 * @property int|null $allotment_id
 * @property int|null $agency_id
 *
 * @package App\Models
 */
class RoomAllotmentAgency extends Model
{
	protected $table = 'room_allotment_agency';
	public $timestamps = false;

	protected $casts = [
		'allotment_id' => 'int',
		'agency_id' => 'int'
	];

	protected $fillable = [
		'allotment_id',
		'agency_id'
	];
}
