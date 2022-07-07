<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChefDescription
 * 
 * @property int $chef_desc_id
 * @property int $chef_id
 * @property int $language_id
 * @property string $description
 * @property string $short_description
 *
 * @package App\Models
 */
class ChefDescription extends Model
{
	protected $table = 'chef_description';
	protected $primaryKey = 'chef_desc_id';
	public $timestamps = false;

	protected $casts = [
		'chef_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'chef_id',
		'language_id',
		'description',
		'short_description'
	];
}
