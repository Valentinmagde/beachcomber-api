<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentCountry
 * 
 * @property int $id
 * @property int|null $allotment_id
 * @property int|null $country_id
 *
 * @package App\Models
 */
class RoomAllotmentCountry extends Model
{
	protected $table = 'room_allotment_country';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'allotment_id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'id',
		'allotment_id',
		'country_id'
	];
}
