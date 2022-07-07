<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelNews
 * 
 * @property int $hotel_news_id
 * @property int $hotel_id
 * @property int $news_id
 *
 * @package App\Models
 */
class HotelNews extends Model
{
	protected $table = 'hotel_news';
	protected $primaryKey = 'hotel_news_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'news_id' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'news_id'
	];
}
