<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MediaType
 * 
 * @property int $media_type_id
 * @property string|null $media_type
 * @property int|null $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class MediaType extends Model
{
	protected $table = 'media_type';
	protected $primaryKey = 'media_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'media_type',
		'active',
		'valid_from',
		'valid_to'
	];
}
