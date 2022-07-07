<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferDescription
 * 
 * @property int $offer_desc_id
 * @property int $offer_id
 * @property int $language_id
 * @property string $title
 * @property string|null $short_description
 * @property string|null $description
 * @property string|null $gift_description
 * @property string|null $conditions
 *
 * @package App\Models
 */
class OfferDescription extends Model
{
	protected $table = 'offer_description';
	protected $primaryKey = 'offer_desc_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'offer_id',
		'language_id',
		'title',
		'short_description',
		'description',
		'gift_description',
		'conditions'
	];
}
