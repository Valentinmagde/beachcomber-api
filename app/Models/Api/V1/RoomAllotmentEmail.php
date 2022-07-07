<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentEmail
 * 
 * @property int $allotment_email_id
 * @property string $email
 * @property int $allotment_email_group_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $status
 *
 * @package App\Models
 */
class RoomAllotmentEmail extends Model
{
	protected $table = 'room_allotment_email';
	protected $primaryKey = 'allotment_email_id';
	public $timestamps = false;

	protected $casts = [
		'allotment_email_group_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'email',
		'allotment_email_group_id',
		'valid_from',
		'valid_to',
		'status'
	];
}
