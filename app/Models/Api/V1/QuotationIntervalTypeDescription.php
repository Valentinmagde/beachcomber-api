<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuotationIntervalTypeDescription
 * 
 * @property int $quote_interval_type_description_id
 * @property int $quote_interval_type_id
 * @property string $description
 * @property int $language_id
 * @property int $active
 *
 * @package App\Models
 */
class QuotationIntervalTypeDescription extends Model
{
	protected $table = 'quotation_interval_type_description';
	protected $primaryKey = 'quote_interval_type_description_id';
	public $timestamps = false;

	protected $casts = [
		'quote_interval_type_id' => 'int',
		'language_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'quote_interval_type_id',
		'description',
		'language_id',
		'active'
	];
}
