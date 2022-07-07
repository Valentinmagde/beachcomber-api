<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentRelatedTable
 * 
 * @property int $id
 * @property string $tablename
 * @property int $active
 *
 * @package App\Models
 */
class ContentRelatedTable extends Model
{
	protected $table = 'content_related_table';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'tablename',
		'active'
	];
}
