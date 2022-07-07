<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferPackage
 * 
 * @property int $offer_package_id
 * @property int $offer_id
 * @property int $package_id
 * @property int $active
 *
 * @package App\Models
 */
class OfferPackage extends Model
{
	protected $table = 'offer_package';
	protected $primaryKey = 'offer_package_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'package_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'package_id',
		'active'
	];
}
