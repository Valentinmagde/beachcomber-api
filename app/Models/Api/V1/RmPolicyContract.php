<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmPolicyContract
 * 
 * @property int $id
 * @property int $year_id
 * @property int $hotel_id
 * @property int $market_id
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $default
 * @property int $sort_order
 * @property int $active
 *
 * @package App\Models
 */
class RmPolicyContract extends Model
{
	protected $table = 'rm_policy_contract';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'hotel_id' => 'int',
		'market_id' => 'int',
		'default' => 'int',
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'year_id',
		'hotel_id',
		'market_id',
		'name',
		'printed_name',
		'description',
		'default',
		'sort_order',
		'active'
	];
}
