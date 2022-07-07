<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TermDescriptionOld
 * 
 * @property int $term_desc_id
 * @property int $term_id
 * @property int $language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class TermDescriptionOld extends Model
{
	protected $table = 'term_description_old';
	protected $primaryKey = 'term_desc_id';
	public $timestamps = false;

	protected $casts = [
		'term_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'term_id',
		'language_id',
		'description'
	];
}
