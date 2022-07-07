<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPartner
 * 
 * @property int $hotel_partner_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string|null $partner_image
 *
 * @package App\Models
 */
class HotelPartner extends Model
{
	protected $table = 'hotel_partner';
	protected $primaryKey = 'hotel_partner_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to',
		'partner_image'
	];
}
