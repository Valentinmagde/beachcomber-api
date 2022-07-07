<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuotePackageRequest
 * 
 * @property int $quote_id
 * @property int $package_id
 * @property int $hotel_package_id
 *
 * @package App\Models
 */
class QuotePackageRequest extends Model
{
	protected $table = 'quote_package_request';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'int',
		'package_id' => 'int',
		'hotel_package_id' => 'int'
	];
}
