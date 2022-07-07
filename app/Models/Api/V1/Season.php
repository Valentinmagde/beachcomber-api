<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Season
 * 
 * @property int $season_id
 * @property int $year_id
 * @property string|null $name
 * @property bool|null $active
 * @property Carbon|null $exported_date_test
 * @property int|null $exported_test
 * @property string|null $exported_test_username
 * @property Carbon|null $exported_date_cloud
 * @property int|null $exported_cloud
 * @property string|null $exported_cloud_username
 *
 * @package App\Models
 */
class Season extends Model
{
	protected $table = 'season';
	protected $primaryKey = 'season_id';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'active' => 'bool',
		'exported_test' => 'int',
		'exported_cloud' => 'int'
	];

	protected $dates = [
		'exported_date_test',
		'exported_date_cloud'
	];

	protected $fillable = [
		'year_id',
		'name',
		'active',
		'exported_date_test',
		'exported_test',
		'exported_test_username',
		'exported_date_cloud',
		'exported_cloud',
		'exported_cloud_username'
	];
}
