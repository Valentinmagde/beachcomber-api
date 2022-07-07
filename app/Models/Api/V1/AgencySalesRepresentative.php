<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencySalesRepresentative
 * 
 * @property int $rep_id
 * @property int $rep_country_id
 * @property string $rep_surname
 * @property string $rep_othername
 * @property int $active
 *
 * @package App\Models
 */
class AgencySalesRepresentative extends Model
{
	protected $table = 'agency_sales_representative';
	protected $primaryKey = 'rep_id';
	public $timestamps = false;

	protected $casts = [
		'rep_country_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'rep_country_id',
		'rep_surname',
		'rep_othername',
		'active'
	];
}
