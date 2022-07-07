<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteMessageTemplate
 * 
 * @property int $quote_message_template_id
 * @property string $template_name
 * @property int $template_for
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class QuoteMessageTemplate extends Model
{
	protected $table = 'quote_message_template';
	protected $primaryKey = 'quote_message_template_id';
	public $timestamps = false;

	protected $casts = [
		'template_for' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'template_name',
		'template_for',
		'valid_from',
		'valid_to'
	];
}
