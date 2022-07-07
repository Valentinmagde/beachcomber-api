<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Market
 * 
 * @property int $market_id
 * @property string|null $name
 * @property string $currency
 * @property string $rate_manager_market_name
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int|null $exported_cloud
 * @property string|null $exported_cloud_username
 * @property Carbon|null $exported_date_cloud
 * @property int|null $exported_test
 * @property string|null $exported_test_username
 * @property Carbon|null $exported_date_test
 *
 * @package App\Models
 */
class Market extends Model
{
	protected $table = 'market';
	protected $primaryKey = 'market_id';
	public $timestamps = false;

	protected $casts = [
		'exported_cloud' => 'int',
		'exported_test' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'exported_date_cloud',
		'exported_date_test'
	];

	protected $fillable = [
		'name',
		'currency',
		'rate_manager_market_name',
		'valid_from',
		'valid_to',
		'exported_cloud',
		'exported_cloud_username',
		'exported_date_cloud',
		'exported_test',
		'exported_test_username',
		'exported_date_test'
	];
}
