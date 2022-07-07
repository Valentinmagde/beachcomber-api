<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteMessageTemplateDescription
 * 
 * @property int $quote_message_template_desc_id
 * @property int $quote_message_template_id
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class QuoteMessageTemplateDescription extends Model
{
	protected $table = 'quote_message_template_description';
	protected $primaryKey = 'quote_message_template_desc_id';
	public $timestamps = false;

	protected $casts = [
		'quote_message_template_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'quote_message_template_id',
		'description',
		'language_id'
	];
}
