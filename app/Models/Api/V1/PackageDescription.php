<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PackageDescription
 * 
 * @property int $package_desc_id
 * @property int $package_id
 * @property int $language_id
 * @property string $name
 * @property string $short_desc
 * @property string $description
 *
 * @package App\Models
 */
class PackageDescription extends Model
{
	protected $table = 'package_description';
	protected $primaryKey = 'package_desc_id';
	public $timestamps = false;

	protected $casts = [
		'package_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'package_id',
		'language_id',
		'name',
		'short_desc',
		'description'
	];
}
