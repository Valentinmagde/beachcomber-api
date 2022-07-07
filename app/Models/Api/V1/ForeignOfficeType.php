<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ForeignOfficeType
 * 
 * @property int $foreign_office_type_id
 * @property string $foreign_office_type
 * @property string $foreign_office_description
 *
 * @package App\Models
 */
class ForeignOfficeType extends Model
{
	protected $table = 'foreign_office_type';
	protected $primaryKey = 'foreign_office_type_id';
	public $timestamps = false;

	protected $fillable = [
		'foreign_office_type',
		'foreign_office_description'
	];
}
