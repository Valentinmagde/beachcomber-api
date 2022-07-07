<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmPolicy
 * 
 * @property int $id
 * @property int $year_id
 * @property int $hotel_id
 * @property int $market_id
 * @property int $source_id
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $sort_order
 * @property int $active
 *
 * @package App\Models
 */
class TariffRmPolicy extends Model
{
	protected $table = 'tariff_rm_policy';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'hotel_id' => 'int',
		'market_id' => 'int',
		'source_id' => 'int',
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'year_id',
		'hotel_id',
		'market_id',
		'source_id',
		'name',
		'printed_name',
		'description',
		'sort_order',
		'active'
	];
}
