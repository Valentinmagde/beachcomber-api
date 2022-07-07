<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GolfHoleLang
 * 
 * @property int $Hole_Lang_Id
 * @property int $Language_Id
 * @property int $Hole_Id
 * @property string $Descrition
 *
 * @package App\Models
 */
class GolfHoleLang extends Model
{
	protected $table = 'golf_hole_lang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Hole_Lang_Id' => 'int',
		'Language_Id' => 'int',
		'Hole_Id' => 'int'
	];

	protected $fillable = [
		'Hole_Lang_Id',
		'Language_Id',
		'Hole_Id',
		'Descrition'
	];
}
