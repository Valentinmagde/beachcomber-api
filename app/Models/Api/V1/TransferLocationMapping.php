<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferLocationMapping
 * 
 * @property int $Transfer_location_id
 * @property int $id_location
 * @property string $region
 * @property string $name
 * @property int|null $hotel_id
 *
 * @package App\Models
 */
class TransferLocationMapping extends Model
{
	protected $table = 'transfer_location_mapping';
	protected $primaryKey = 'Transfer_location_id';
	public $timestamps = false;

	protected $casts = [
		'id_location' => 'int',
		'hotel_id' => 'int'
	];

	protected $fillable = [
		'id_location',
		'region',
		'name',
		'hotel_id'
	];
}
