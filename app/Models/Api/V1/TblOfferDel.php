<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOfferDel
 * 
 * @property int $id
 *
 * @package App\Models
 */
class TblOfferDel extends Model
{
	protected $table = 'tbl_offer_del';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id'
	];
}
