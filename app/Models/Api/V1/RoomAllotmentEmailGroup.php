<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentEmailGroup
 * 
 * @property int $allotment_group_id
 * @property string $group_name
 * @property Carbon $date_from
 * @property Carbon $date_to
 *
 * @package App\Models
 */
class RoomAllotmentEmailGroup extends Model
{
	protected $table = 'room_allotment_email_group';
	protected $primaryKey = 'allotment_group_id';
	public $timestamps = false;

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'group_name',
		'date_from',
		'date_to'
	];
}
