<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ForeignOfficeCountry
 * 
 * @property int $foreign_country_id
 * @property int $country_id
 * @property int $foreign_office_id
 *
 * @package App\Models
 */
class ForeignOfficeCountry extends Model
{
	protected $table = 'foreign_office_country';
	protected $primaryKey = 'foreign_country_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'foreign_office_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'foreign_office_id'
	];
}
