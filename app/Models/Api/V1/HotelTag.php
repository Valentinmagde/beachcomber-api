<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelTag
 * 
 * @property int $hotel_tag_id
 * @property int $hotel_id
 * @property int $tag_id
 *
 * @package App\Models
 */
class HotelTag extends Model
{
	protected $table = 'hotel_tag';
	protected $primaryKey = 'hotel_tag_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'tag_id' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'tag_id'
	];
}
