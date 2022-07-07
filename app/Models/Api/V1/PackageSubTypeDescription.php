<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PackageSubTypeDescription
 * 
 * @property int $package_subtype_desc_id
 * @property int $package_subtype_id
 * @property int $language_id
 * @property string $description
 * @property string $name
 *
 * @package App\Models
 */
class PackageSubTypeDescription extends Model
{
	protected $table = 'package_sub_type_description';
	protected $primaryKey = 'package_subtype_desc_id';
	public $timestamps = false;

	protected $casts = [
		'package_subtype_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'package_subtype_id',
		'language_id',
		'description',
		'name'
	];
}
