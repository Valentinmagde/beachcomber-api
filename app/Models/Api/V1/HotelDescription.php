<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelDescription
 * 
 * @property int $hotel_desc_id
 * @property int $hotel_id
 * @property int $section_id
 * @property string $description_name
 * @property string $short_description
 * @property string $description
 * @property int $language_id
 * @property int|null $parent_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelDescription extends Model
{
	protected $table = 'hotel_description';
	protected $primaryKey = 'hotel_desc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'section_id' => 'int',
		'language_id' => 'int',
		'parent_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'section_id',
		'description_name',
		'short_description',
		'description',
		'language_id',
		'parent_id',
		'valid_from',
		'valid_to'
	];
}
