<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPrivateclubDescription
 * 
 * @property int $private_club_desc_id
 * @property int $private_club_id
 * @property int $language_id
 * @property string $description
 * @property string $conditions
 * @property string $included
 * @property string $facility
 *
 * @package App\Models
 */
class HotelPrivateclubDescription extends Model
{
	protected $table = 'hotel_privateclub_description';
	protected $primaryKey = 'private_club_desc_id';
	public $timestamps = false;

	protected $casts = [
		'private_club_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'private_club_id',
		'language_id',
		'description',
		'conditions',
		'included',
		'facility'
	];
}
