<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmSource
 * 
 * @property int $id
 * @property int $year_id
 * @property string|null $code
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class RmSource extends Model
{
	protected $table = 'rm_source';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'year_id',
		'code',
		'name',
		'active'
	];
}
