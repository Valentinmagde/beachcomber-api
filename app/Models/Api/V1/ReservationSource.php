<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationSource
 * 
 * @property int $reservation_source_id
 * @property string $reservation_source_name
 * @property string $reservation_source_code
 * @property string $reservation_source_alias
 * @property string $reservation_hms_code
 * @property int $reservation_source_rank
 * @property int $rate_manager_id
 * @property int|null $rate_plan_id
 * @property int $active
 * @property Carbon|null $exported_date_test
 * @property int|null $exported_test
 * @property string|null $exported_test_username
 * @property int|null $exported_cloud
 * @property Carbon|null $exported_date_cloud
 * @property string|null $exported_cloud_username
 *
 * @package App\Models
 */
class ReservationSource extends Model
{
	protected $table = 'reservation_source';
	protected $primaryKey = 'reservation_source_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_source_rank' => 'int',
		'rate_manager_id' => 'int',
		'rate_plan_id' => 'int',
		'active' => 'int',
		'exported_test' => 'int',
		'exported_cloud' => 'int'
	];

	protected $dates = [
		'exported_date_test',
		'exported_date_cloud'
	];

	protected $fillable = [
		'reservation_source_name',
		'reservation_source_code',
		'reservation_source_alias',
		'reservation_hms_code',
		'reservation_source_rank',
		'rate_manager_id',
		'rate_plan_id',
		'active',
		'exported_date_test',
		'exported_test',
		'exported_test_username',
		'exported_cloud',
		'exported_date_cloud',
		'exported_cloud_username'
	];
}
