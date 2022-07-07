<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IndustryPartner
 * 
 * @property int $industry_partner_id
 * @property int $tariff_category_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class IndustryPartner extends Model
{
	protected $table = 'industry_partner';
	protected $primaryKey = 'industry_partner_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_category_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'tariff_category_id',
		'valid_from',
		'valid_to',
		'active'
	];
}
