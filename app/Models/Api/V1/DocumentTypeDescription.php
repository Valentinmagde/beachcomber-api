<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentTypeDescription
 * 
 * @property int $document_type_desc_id
 * @property int $document_type_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class DocumentTypeDescription extends Model
{
	protected $table = 'document_type_description';
	protected $primaryKey = 'document_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'document_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'document_type_id',
		'language_id',
		'name'
	];
}
