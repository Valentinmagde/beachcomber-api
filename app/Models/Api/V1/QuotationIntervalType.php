<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuotationIntervalType
 * 
 * @property int $quote_interval_type_id
 * @property string|null $quote_interval_type
 * @property int|null $active
 *
 * @package App\Models
 */
class QuotationIntervalType extends Model
{
	protected $table = 'quotation_interval_type';
	protected $primaryKey = 'quote_interval_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'quote_interval_type',
		'active'
	];
}
