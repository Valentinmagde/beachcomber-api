<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelAccount
 * 
 * @property int $hotel_account_id
 * @property int $hotel_id
 * @property int $currency
 * @property string $account_number
 * @property string|null $iban
 * @property string|null $swift_code
 *
 * @package App\Models
 */
class HotelAccount extends Model
{
	protected $table = 'hotel_account';
	protected $primaryKey = 'hotel_account_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'currency' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'currency',
		'account_number',
		'iban',
		'swift_code'
	];
}
