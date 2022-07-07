<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentConditionsAgency
 * 
 * @property int $id
 * @property int|null $allotment_id
 * @property int|null $agency_id
 *
 * @package App\Models
 */
class RoomAllotmentConditionsAgency extends Model
{
	protected $table = 'room_allotment_conditions_agency';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'allotment_id' => 'int',
		'agency_id' => 'int'
	];

	protected $fillable = [
		'id',
		'allotment_id',
		'agency_id'
	];
}
