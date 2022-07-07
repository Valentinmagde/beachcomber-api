<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelLogo
 * 
 * @property int $hotel_logo_id
 * @property int $hotel_id
 * @property string $logo
 *
 * @package App\Models
 */
class HotelLogo extends Model
{
	protected $table = 'hotel_logo';
	protected $primaryKey = 'hotel_logo_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'logo'
	];
}
