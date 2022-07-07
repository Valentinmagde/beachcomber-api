<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationQuote
 * 
 * @property int $reservation_quote_id
 * @property int $reservation_id
 *
 * @package App\Models
 */
class ReservationQuote extends Model
{
	protected $table = 'reservation_quote';
	protected $primaryKey = 'reservation_quote_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int'
	];

	protected $fillable = [
		'reservation_id'
	];
}
