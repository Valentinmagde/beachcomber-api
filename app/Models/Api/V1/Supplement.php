<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplement
 * 
 * @property int $supplement_id
 * @property string $supplement_name
 *
 * @package App\Models
 */
class Supplement extends Model
{
	protected $table = 'supplement';
	protected $primaryKey = 'supplement_id';
	public $timestamps = false;

	protected $fillable = [
		'supplement_name'
	];
}
