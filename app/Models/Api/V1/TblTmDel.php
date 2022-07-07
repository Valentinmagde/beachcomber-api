<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblTmDel
 * 
 * @property int $Tariff_id
 *
 * @package App\Models
 */
class TblTmDel extends Model
{
	protected $table = 'tbl_tm_del';
	protected $primaryKey = 'Tariff_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Tariff_id' => 'int'
	];
}
