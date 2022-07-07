<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractRm
 * 
 * @property int $id
 * @property int $year_id
 * @property int $contract_by
 * @property int $reseller_id
 * @property int $market_id
 * @property int $country_id
 * @property int $currency_id
 * @property int $language_id
 * @property string $contact_name
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property string|null $allot_group
 * @property int $allot_group_id
 * @property Carbon $date_created
 * @property string $log
 * @property int $active
 * @property int|null $for_hotel
 * @property string $represented_by
 * @property int|null $parent_id
 * @property int|null $contract_type
 * @property bool|null $is_template
 * @property string|null $contract_name
 *
 * @package App\Models
 */
class ContractRm extends Model
{
	protected $table = 'contract_rm';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'contract_by' => 'int',
		'reseller_id' => 'int',
		'market_id' => 'int',
		'country_id' => 'int',
		'currency_id' => 'int',
		'language_id' => 'int',
		'allot_group_id' => 'int',
		'active' => 'int',
		'for_hotel' => 'int',
		'parent_id' => 'int',
		'contract_type' => 'int',
		'is_template' => 'bool'
	];

	protected $dates = [
		'date_from',
		'date_to',
		'date_created'
	];

	protected $fillable = [
		'year_id',
		'contract_by',
		'reseller_id',
		'market_id',
		'country_id',
		'currency_id',
		'language_id',
		'contact_name',
		'date_from',
		'date_to',
		'allot_group',
		'allot_group_id',
		'date_created',
		'log',
		'active',
		'for_hotel',
		'represented_by',
		'parent_id',
		'contract_type',
		'is_template',
		'contract_name'
	];
}
