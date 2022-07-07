<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelTagDescription
 * 
 * @property int $hotel_tag_desc_id
 * @property int $hotel_tag_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class HotelTagDescription extends Model
{
	protected $table = 'hotel_tag_description';
	protected $primaryKey = 'hotel_tag_desc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_tag_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'hotel_tag_id',
		'language_id',
		'description'
	];
}
