<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmCategory
 * 
 * @property int $id
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class OfferRmCategory extends Model
{
	protected $table = 'offer_rm_category';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'active'
	];
}
