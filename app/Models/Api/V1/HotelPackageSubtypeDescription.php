<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageSubtypeDescription
 * 
 * @property int $hotel_package_sub_desc_id
 * @property int $hotel_package_sub_id
 * @property int $language_id
 * @property string $included
 *
 * @package App\Models
 */
class HotelPackageSubtypeDescription extends Model
{
	protected $table = 'hotel_package_subtype_description';
	protected $primaryKey = 'hotel_package_sub_desc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_sub_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'hotel_package_sub_id',
		'language_id',
		'included'
	];
}
