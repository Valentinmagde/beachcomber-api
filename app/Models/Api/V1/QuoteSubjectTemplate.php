<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteSubjectTemplate
 * 
 * @property int $quote_subject_template_id
 * @property int $quote_message_template_id
 * @property string $quote_subject_type
 * @property int $active
 *
 * @package App\Models
 */
class QuoteSubjectTemplate extends Model
{
	protected $table = 'quote_subject_template';
	protected $primaryKey = 'quote_subject_template_id';
	public $timestamps = false;

	protected $casts = [
		'quote_message_template_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'quote_message_template_id',
		'quote_subject_type',
		'active'
	];
}
