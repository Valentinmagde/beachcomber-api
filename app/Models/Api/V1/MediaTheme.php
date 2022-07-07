<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MediaTheme
 * 
 * @property int $theme_id
 * @property string $theme_name
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class MediaTheme extends Model
{
	protected $table = 'media_theme';
	protected $primaryKey = 'theme_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'theme_name',
		'valid_from',
		'valid_to'
	];
}
