<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmOfferCat
 * 
 * @property int $id
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class RmOfferCat extends Model
{
	protected $table = 'rm_offer_cat';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'active'
	];
}
