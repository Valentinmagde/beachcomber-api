<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelRating
 * 
 * @property int $rate_id
 * @property string|null $rate_name
 * @property string $rate_number
 *
 * @package App\Models
 */
class HotelRating extends Model
{
	protected $table = 'hotel_rating';
	protected $primaryKey = 'rate_id';
	public $timestamps = false;

	protected $fillable = [
		'rate_name',
		'rate_number'
	];
}
