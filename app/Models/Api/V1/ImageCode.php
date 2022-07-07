<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImageCode
 * 
 * @property int $image_code_id
 * @property string $image_code
 *
 * @package App\Models
 */
class ImageCode extends Model
{
	protected $table = 'image_code';
	public $timestamps = false;
}
