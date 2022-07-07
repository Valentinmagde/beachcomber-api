<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelDocument
 * 
 * @property int $hotel_document_id
 * @property int $document_id
 * @property int $hotel_id
 * @property string|null $document_title
 * @property string|null $document_name
 * @property string|null $document_path
 * @property string $document_link
 * @property string $target
 * @property Carbon $uploaded_on
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelDocument extends Model
{
	protected $table = 'hotel_document';
	protected $primaryKey = 'hotel_document_id';
	public $timestamps = false;

	protected $casts = [
		'document_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'uploaded_on',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'document_id',
		'hotel_id',
		'document_title',
		'document_name',
		'document_path',
		'document_link',
		'target',
		'uploaded_on',
		'valid_from',
		'valid_to'
	];
}
