<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractConditionRmToDelete
 * 
 * @property int $id
 * @property int $year_id
 * @property int $hotel_id
 * @property int $market_id
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $default
 * @property int $has_attached_allot
 * @property int $is_properties_ratecards
 * @property int $sort_order
 * @property int $active
 * @property int $for_hotel
 * @property int $for_market
 *
 * @package App\Models
 */
class ContractConditionRmToDelete extends Model
{
	protected $table = 'contract_condition_rm_to_delete';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'hotel_id' => 'int',
		'market_id' => 'int',
		'default' => 'int',
		'has_attached_allot' => 'int',
		'is_properties_ratecards' => 'int',
		'sort_order' => 'int',
		'active' => 'int',
		'for_hotel' => 'int',
		'for_market' => 'int'
	];

	protected $fillable = [
		'year_id',
		'hotel_id',
		'market_id',
		'name',
		'printed_name',
		'description',
		'default',
		'has_attached_allot',
		'is_properties_ratecards',
		'sort_order',
		'active',
		'for_hotel',
		'for_market'
	];
}
