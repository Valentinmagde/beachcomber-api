<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationType
 * 
 * @property int $reservation_type_id
 * @property string $reservation_type
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ReservationType extends Model
{
	protected $table = 'reservation_type';
	protected $primaryKey = 'reservation_type_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'reservation_type',
		'valid_from',
		'valid_to'
	];
}
