<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SeasonHotel
 * 
 * @property int $seaon_hotel_id
 * @property int|null $season_id
 * @property int|null $hotel_id
 * @property bool|null $active
 *
 * @package App\Models
 */
class SeasonHotel extends Model
{
	protected $table = 'season_hotel';
	protected $primaryKey = 'seaon_hotel_id';
	public $timestamps = false;

	protected $casts = [
		'season_id' => 'int',
		'hotel_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'season_id',
		'hotel_id',
		'active'
	];
}
