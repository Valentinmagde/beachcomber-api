<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsHotelAssociation
 * 
 * @property int $news_association_id
 * @property int $news_id
 * @property int $hotel_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class NewsHotelAssociation extends Model
{
	protected $table = 'news_hotel_association';
	protected $primaryKey = 'news_association_id';
	public $timestamps = false;

	protected $casts = [
		'news_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'news_id',
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
