<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Wedtype
 * 
 * @property int $wed_type_id
 * @property string $wed_type
 *
 * @package App\Models
 */
class Wedtype extends Model
{
	protected $table = 'wedtype';
	protected $primaryKey = 'wed_type_id';
	public $timestamps = false;

	protected $fillable = [
		'wed_type'
	];
}
