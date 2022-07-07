<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmSite
 * 
 * @property int $id
 * @property int|null $hotel_id
 * @property string $code
 * @property int $property_code
 * @property int|null $room_nb
 * @property string $name
 * @property string|null $printed_name
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property int $country_id
 * @property string|null $pcode
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $url
 * @property int|null $currency_id
 * @property int|null $ranking
 * @property int $year_id
 * @property int|null $active
 *
 * @package App\Models
 */
class RmSite extends Model
{
	protected $table = 'rm_site';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'property_code' => 'int',
		'room_nb' => 'int',
		'country_id' => 'int',
		'currency_id' => 'int',
		'ranking' => 'int',
		'year_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'code',
		'property_code',
		'room_nb',
		'name',
		'printed_name',
		'address',
		'city',
		'state',
		'country_id',
		'pcode',
		'phone',
		'fax',
		'email',
		'url',
		'currency_id',
		'ranking',
		'year_id',
		'active'
	];
}
