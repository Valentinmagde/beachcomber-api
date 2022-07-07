<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmSiteRoomsNb
 * 
 * @property int $site_id
 * @property int $year_id
 * @property int $rooms_nb
 *
 * @package App\Models
 */
class RmSiteRoomsNb extends Model
{
	protected $table = 'rm_site_rooms_nb';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'site_id' => 'int',
		'year_id' => 'int',
		'rooms_nb' => 'int'
	];

	protected $fillable = [
		'rooms_nb'
	];
}
