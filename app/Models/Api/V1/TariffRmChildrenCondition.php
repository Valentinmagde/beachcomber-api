<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmChildrenCondition
 * 
 * @property int $id
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $currency_id
 * @property int $source_id
 * @property int $season_id
 * @property int $hotel_id
 * @property int $market_id
 * @property int $rate_card_id
 * @property int $child_age1_id
 * @property int $child_age2_id
 * @property int $child_age3_id
 * @property int $year_id
 * @property int $version
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmChildrenCondition extends Model
{
	protected $table = 'tariff_rm_children_condition';
	public $timestamps = false;

	protected $casts = [
		'currency_id' => 'int',
		'source_id' => 'int',
		'season_id' => 'int',
		'hotel_id' => 'int',
		'market_id' => 'int',
		'rate_card_id' => 'int',
		'child_age1_id' => 'int',
		'child_age2_id' => 'int',
		'child_age3_id' => 'int',
		'year_id' => 'int',
		'version' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'printed_name',
		'description',
		'currency_id',
		'source_id',
		'season_id',
		'hotel_id',
		'market_id',
		'rate_card_id',
		'child_age1_id',
		'child_age2_id',
		'child_age3_id',
		'year_id',
		'version',
		'active'
	];
}
