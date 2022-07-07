<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerContactType
 * 
 * @property int $id
 * @property string $name
 * @property bool $active
 *
 * @package App\Models
 */
class ResellerContactType extends Model
{
	protected $table = 'reseller_contact_type';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool'
	];

	protected $fillable = [
		'name',
		'active'
	];
}
