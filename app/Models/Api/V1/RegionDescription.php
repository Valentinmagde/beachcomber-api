<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegionDescription
 * 
 * @property int $region_description_id
 * @property int $region_id
 * @property string $region_name
 * @property int $language_id
 *
 * @package App\Models
 */
class RegionDescription extends Model
{
	protected $table = 'region_description';
	protected $primaryKey = 'region_description_id';
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'region_id',
		'region_name',
		'language_id'
	];
}
