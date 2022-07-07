<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerType
 * 
 * @property int $id
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class ResellerType extends Model
{
	protected $table = 'reseller_type';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'active'
	];
}
