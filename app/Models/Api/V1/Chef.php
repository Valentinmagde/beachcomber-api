<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chef
 * 
 * @property int $chef_id
 * @property int $hotel_id
 * @property string $surname
 * @property string $othername
 * @property bool $is_executive
 * @property string $chef_image
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Chef extends Model
{
	protected $table = 'chef';
	protected $primaryKey = 'chef_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'is_executive' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'surname',
		'othername',
		'is_executive',
		'chef_image',
		'valid_from',
		'valid_to'
	];
}
