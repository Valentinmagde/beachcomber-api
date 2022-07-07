<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BctFrHotelMapping
 * 
 * @property int $bct_hotel_mapping_id
 * @property string $bct_fr_hotel_mapping
 * @property int $bch_hotel_id
 *
 * @package App\Models
 */
class BctFrHotelMapping extends Model
{
	protected $table = 'bct_fr_hotel_mapping';
	protected $primaryKey = 'bct_hotel_mapping_id';
	public $timestamps = false;

	protected $casts = [
		'bch_hotel_id' => 'int'
	];

	protected $fillable = [
		'bct_fr_hotel_mapping',
		'bch_hotel_id'
	];
}
