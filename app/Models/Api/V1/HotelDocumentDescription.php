<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelDocumentDescription
 * 
 * @property int $document_desc_id
 * @property int $hotel_document_id
 * @property int $language_id
 *
 * @package App\Models
 */
class HotelDocumentDescription extends Model
{
	protected $table = 'hotel_document_description';
	protected $primaryKey = 'document_desc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_document_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'hotel_document_id',
		'language_id'
	];
}
