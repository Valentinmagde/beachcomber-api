<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelToPartner
 * 
 * @property int $hotel_to_partner_id
 * @property int $hotel_id
 * @property int $hotel_partner_id
 *
 * @package App\Models
 */
class HotelToPartner extends Model
{
	protected $table = 'hotel_to_partner';
	protected $primaryKey = 'hotel_to_partner_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'hotel_partner_id' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'hotel_partner_id'
	];
}
