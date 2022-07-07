<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderAlias
 * 
 * @property int $id
 * @property string $alias
 * @property string|null $name
 * @property int|null $hotel_id
 * @property Carbon $created
 * @property string $folder_location
 *
 * @package App\Models
 */
class SliderAlias extends Model
{
	protected $table = 'slider_alias';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'alias',
		'name',
		'hotel_id',
		'created',
		'folder_location'
	];
}
