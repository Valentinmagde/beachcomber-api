<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmSeason
 * 
 * @property int $id
 * @property int|null $market_id
 * @property int|null $hotel_id
 * @property int $year_id
 * @property string $label
 * @property int $active
 *
 * @package App\Models
 */
class RmSeason extends Model
{
	protected $table = 'rm_season';
	public $timestamps = false;

	protected $casts = [
		'market_id' => 'int',
		'hotel_id' => 'int',
		'year_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'market_id',
		'hotel_id',
		'year_id',
		'label',
		'active'
	];
}
