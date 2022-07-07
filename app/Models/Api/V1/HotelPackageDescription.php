<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageDescription
 * 
 * @property int $hotel_package_description_id
 * @property int|null $language_id
 * @property string|null $title
 * @property string|null $included
 * @property string|null $keypoint
 * @property int|null $hotel_package_id
 *
 * @package App\Models
 */
class HotelPackageDescription extends Model
{
	protected $table = 'hotel_package_description';
	protected $primaryKey = 'hotel_package_description_id';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int',
		'hotel_package_id' => 'int'
	];

	protected $fillable = [
		'language_id',
		'title',
		'included',
		'keypoint',
		'hotel_package_id'
	];
}
