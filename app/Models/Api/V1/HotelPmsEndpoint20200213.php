<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPmsEndpoint20200213
 * 
 * @property int $hotel_pms_endpoint_id
 * @property int $hotel_id
 * @property string $hotel_code
 * @property string $hms_endpoint_url
 * @property string $stl_endpoint_url
 * @property int $endpoint_for
 * @property string $username
 * @property string $password
 * @property string $hms_username
 * @property string $hms_password
 * @property string $obi_api_endpoint_url
 * @property string $obi_api_username
 * @property string $obi_api_password
 * @property int|null $is_activated
 * @property bool $hms_is_activated
 *
 * @package App\Models
 */
class HotelPmsEndpoint20200213 extends Model
{
	protected $table = 'hotel_pms_endpoint_20200213';
	protected $primaryKey = 'hotel_pms_endpoint_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'endpoint_for' => 'int',
		'is_activated' => 'int',
		'hms_is_activated' => 'bool'
	];

	protected $hidden = [
		'password',
		'hms_password',
		'obi_api_password'
	];

	protected $fillable = [
		'hotel_id',
		'hotel_code',
		'hms_endpoint_url',
		'stl_endpoint_url',
		'endpoint_for',
		'username',
		'password',
		'hms_username',
		'hms_password',
		'obi_api_endpoint_url',
		'obi_api_username',
		'obi_api_password',
		'is_activated',
		'hms_is_activated'
	];
}
