<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageSupplementDescription
 * 
 * @property int $hotel_package_supplement_desc_id
 * @property int $hotel_package_supplement_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class HotelPackageSupplementDescription extends Model
{
	protected $table = 'hotel_package_supplement_description';
	protected $primaryKey = 'hotel_package_supplement_desc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_supplement_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'hotel_package_supplement_id',
		'language_id',
		'description'
	];
}
