<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Otum
 * 
 * @property int $id
 * @property string $name
 * @property bool $taxation_system
 * @property bool $status
 * @property Carbon $created
 *
 * @package App\Models
 */
class Otum extends Model
{
	protected $table = 'ota';
	public $timestamps = false;

	protected $casts = [
		'taxation_system' => 'bool',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'name',
		'taxation_system',
		'status',
		'created'
	];
}
