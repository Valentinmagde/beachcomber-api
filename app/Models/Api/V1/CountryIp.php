<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryIp
 * 
 * @property int $start_ip_num
 * @property int $end_ip_num
 * @property string $country_code
 * @property Carbon $updated
 *
 * @package App\Models
 */
class CountryIp extends Model
{
	protected $table = 'country_ip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'start_ip_num' => 'int',
		'end_ip_num' => 'int'
	];

	protected $dates = [
		'updated'
	];

	protected $fillable = [
		'country_code',
		'updated'
	];
}
