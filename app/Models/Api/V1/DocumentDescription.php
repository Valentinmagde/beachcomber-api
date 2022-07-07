<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentDescription
 * 
 * @property int $document_desc_id
 * @property int $document_id
 * @property int $language_id
 * @property string $short_desc
 * @property Carbon $date_uploaded
 * @property string $uploaded_by
 * @property string $path
 *
 * @package App\Models
 */
class DocumentDescription extends Model
{
	protected $table = 'document_description';
	protected $primaryKey = 'document_desc_id';
	public $timestamps = false;

	protected $casts = [
		'document_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'date_uploaded'
	];

	protected $fillable = [
		'document_id',
		'language_id',
		'short_desc',
		'date_uploaded',
		'uploaded_by',
		'path'
	];
}
