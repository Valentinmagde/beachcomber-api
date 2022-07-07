<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmRate
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $room_id
 * @property int $rate_type_id
 * @property int $pax_type_id
 * @property int $season_type_id
 * @property int $auto
 * @property float $value
 * @property int $shared_value
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmRate extends Model
{
	protected $table = 'tariff_rm_rate';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'room_id' => 'int',
		'rate_type_id' => 'int',
		'pax_type_id' => 'int',
		'season_type_id' => 'int',
		'auto' => 'int',
		'value' => 'float',
		'shared_value' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'rate_card_id',
		'room_id',
		'rate_type_id',
		'pax_type_id',
		'season_type_id',
		'auto',
		'value',
		'shared_value',
		'active'
	];
}
