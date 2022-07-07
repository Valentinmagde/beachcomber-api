<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiStorage
 * 
 * @property int $storage_id
 * @property Carbon $accessTime
 * @property string $ip_address
 *
 * @package App\Models
 */
class ApiStorage extends Model
{
	protected $table = 'api_storage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'storage_id' => 'int'
	];

	protected $dates = [
		'accessTime'
	];

	protected $fillable = [
		'storage_id',
		'accessTime',
		'ip_address'
	];
}
