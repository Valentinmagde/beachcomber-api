<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TableDescription
 * 
 * @property int $id
 * @property string|null $description_parent_fieldname
 * @property string|null $description_parent_table
 * @property string|null $description_table
 * @property string|null $description_fieldname
 * @property string|null $description_id_fieldname
 *
 * @package App\Models
 */
class TableDescription extends Model
{
	protected $table = 'table_description';
	public $timestamps = false;

	protected $fillable = [
		'description_parent_fieldname',
		'description_parent_table',
		'description_table',
		'description_fieldname',
		'description_id_fieldname'
	];
}
