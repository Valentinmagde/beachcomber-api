<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyType
 * 
 * @property int $agency_type_id
 * @property string $agency_type
 * @property int $active
 *
 * @package App\Models
 */
class AgencyType extends Model
{
	protected $table = 'agency_type';
	protected $primaryKey = 'agency_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'agency_type',
		'active'
	];
}
