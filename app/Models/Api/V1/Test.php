<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Test
 * 
 * @property int $id
 * @property string $sql
 * @property Carbon|null $stamp
 * @property string|null $test
 *
 * @package App\Models
 */
class Test extends Model
{
	protected $table = 'test';
	public $timestamps = false;

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'sql',
		'stamp',
		'test'
	];
}
