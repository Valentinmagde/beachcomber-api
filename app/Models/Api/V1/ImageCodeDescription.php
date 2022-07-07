<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImageCodeDescription
 * 
 * @property int $image_code_desc_id
 * @property int $image_code_id
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class ImageCodeDescription extends Model
{
	protected $table = 'image_code_description';
	protected $primaryKey = 'image_code_desc_id';
	public $timestamps = false;

	protected $casts = [
		'image_code_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'image_code_id',
		'description',
		'language_id'
	];
}
