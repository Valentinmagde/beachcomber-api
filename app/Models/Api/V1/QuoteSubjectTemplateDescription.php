<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteSubjectTemplateDescription
 * 
 * @property int $quote_subject_template_desc_id
 * @property int $quote_subject_template_id
 * @property string $quote_subject_template_description
 * @property int $language_id
 *
 * @package App\Models
 */
class QuoteSubjectTemplateDescription extends Model
{
	protected $table = 'quote_subject_template_description';
	protected $primaryKey = 'quote_subject_template_desc_id';
	public $timestamps = false;

	protected $casts = [
		'quote_subject_template_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'quote_subject_template_id',
		'quote_subject_template_description',
		'language_id'
	];
}
