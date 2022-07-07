<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacilityDescription
 * 
 * @property int $facility_desc_id
 * @property int $facility_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class FacilityDescription extends Model
{
	protected $table = 'facility_description';
	protected $primaryKey = 'facility_desc_id';
	public $timestamps = false;

	protected $casts = [
		'facility_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'facility_id',
		'language_id',
		'description'
	];
}
