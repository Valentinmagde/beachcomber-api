<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TagDescription
 * 
 * @property int $tag_description_id
 * @property int|null $tag_id
 * @property int|null $language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class TagDescription extends Model
{
	protected $table = 'tag_description';
	protected $primaryKey = 'tag_description_id';
	public $timestamps = false;

	protected $casts = [
		'tag_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'tag_id',
		'language_id',
		'description'
	];
}
