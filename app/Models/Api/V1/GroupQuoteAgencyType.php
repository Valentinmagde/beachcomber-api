<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteAgencyType
 * 
 * @property int $id
 * @property string $agency_type
 *
 * @package App\Models
 */
class GroupQuoteAgencyType extends Model
{
	protected $table = 'group_quote_agency_type';
	public $timestamps = false;

	protected $fillable = [
		'agency_type'
	];
}
