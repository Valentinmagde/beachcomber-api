<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPartnerDescription
 * 
 * @property int $hotel_partner_description_id
 * @property int $hotel_partner_id
 * @property int $language_id
 * @property string|null $short_description
 * @property string|null $long_description
 * @property string $partner_name
 *
 * @package App\Models
 */
class HotelPartnerDescription extends Model
{
	protected $table = 'hotel_partner_description';
	protected $primaryKey = 'hotel_partner_description_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_partner_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'hotel_partner_id',
		'language_id',
		'short_description',
		'long_description',
		'partner_name'
	];
}
