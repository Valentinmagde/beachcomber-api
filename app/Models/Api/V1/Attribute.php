<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attribute
 * 
 * @property int $attribute_id
 * @property string $attribute_name
 *
 * @package App\Models
 */
class Attribute extends Model
{
	protected $table = 'attribute';
	protected $primaryKey = 'attribute_id';
	public $timestamps = false;

	protected $fillable = [
		'attribute_name'
	];
}
