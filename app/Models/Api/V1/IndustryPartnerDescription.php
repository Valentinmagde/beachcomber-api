<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IndustryPartnerDescription
 * 
 * @property int $industry_partner_desc_id
 * @property int $industry_partner_id
 * @property string $description
 * @property int $language_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class IndustryPartnerDescription extends Model
{
	protected $table = 'industry_partner_description';
	protected $primaryKey = 'industry_partner_desc_id';
	public $timestamps = false;

	protected $casts = [
		'industry_partner_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'industry_partner_id',
		'description',
		'language_id',
		'valid_from',
		'valid_to'
	];
}
