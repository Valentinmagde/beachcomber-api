<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryIpv4
 * 
 * @property string|null $start_ipv4_address
 * @property string $end_ipv4_address
 * @property float|null $start_ip_num
 * @property float $end_ip_num
 * @property string|null $country_code_2
 * @property string|null $country_code
 * @property string|null $country_name
 *
 * @package App\Models
 */
class CountryIpv4 extends Model
{
	protected $table = 'country_ipv4';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'start_ip_num' => 'float',
		'end_ip_num' => 'float'
	];

	protected $fillable = [
		'start_ipv4_address',
		'end_ipv4_address',
		'start_ip_num',
		'end_ip_num',
		'country_code_2',
		'country_code',
		'country_name'
	];
}
