<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferMainTypeDescription
 * 
 * @property int $offer_main_type_desc_id
 * @property int $offer_main_type_id
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class OfferMainTypeDescription extends Model
{
	protected $table = 'offer_main_type_description';
	protected $primaryKey = 'offer_main_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'offer_main_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'offer_main_type_id',
		'description',
		'language_id'
	];
}
