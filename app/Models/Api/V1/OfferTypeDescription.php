<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferTypeDescription
 * 
 * @property int $offer_type_desc_id
 * @property int $offer_type_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 * @property string $conditions
 *
 * @package App\Models
 */
class OfferTypeDescription extends Model
{
	protected $table = 'offer_type_description';
	protected $primaryKey = 'offer_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'offer_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'offer_type_id',
		'language_id',
		'name',
		'description',
		'conditions'
	];
}
