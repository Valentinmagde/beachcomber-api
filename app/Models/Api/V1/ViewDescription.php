<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewDescription
 * 
 * @property int $view_desc_id
 * @property int $view_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class ViewDescription extends Model
{
	protected $table = 'view_description';
	protected $primaryKey = 'view_desc_id';
	public $timestamps = false;

	protected $casts = [
		'view_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'view_id',
		'language_id',
		'name'
	];
}
