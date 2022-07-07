<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentType
 * 
 * @property int $content_type_id
 * @property string|null $content_type
 * @property int|null $active
 *
 * @package App\Models
 */
class ContentType extends Model
{
	protected $table = 'content_type';
	protected $primaryKey = 'content_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'content_type',
		'active'
	];
}
