<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentPage
 * 
 * @property int $page_id
 * @property string $page_name
 * @property string $image_folder
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ContentPage extends Model
{
	protected $table = 'content_page';
	protected $primaryKey = 'page_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'page_name',
		'image_folder',
		'valid_from',
		'valid_to'
	];
}
