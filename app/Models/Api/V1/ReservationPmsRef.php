<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPmsRef
 * 
 * @property int $id
 * @property int $reservation_id
 * @property string $starlight_ref
 * @property string $hms_ref
 * @property bool $active
 *
 * @package App\Models
 */
class ReservationPmsRef extends Model
{
	protected $table = 'reservation_pms_ref';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'reservation_id',
		'starlight_ref',
		'hms_ref',
		'active'
	];
}
