<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelEmail
 * 
 * @property int $hotel_email_id
 * @property int $hotel_id
 * @property int $departement_id
 * @property string $email
 *
 * @package App\Models
 */
class HotelEmail extends Model
{
	protected $table = 'hotel_email';
	protected $primaryKey = 'hotel_email_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'departement_id' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'departement_id',
		'email'
	];
}
