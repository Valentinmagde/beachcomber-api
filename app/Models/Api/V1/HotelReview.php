<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelReview
 * 
 * @property int $review_id
 * @property string $title
 * @property string $description
 * @property int $general_rating
 * @property int $spa_rating
 * @property int $restaurant_rating
 * @property bool $moderated
 * @property string $moderator
 * @property bool $rejected
 * @property string $rejector
 * @property string $rejected_reason
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelReview extends Model
{
	protected $table = 'hotel_review';
	protected $primaryKey = 'review_id';
	public $timestamps = false;

	protected $casts = [
		'general_rating' => 'int',
		'spa_rating' => 'int',
		'restaurant_rating' => 'int',
		'moderated' => 'bool',
		'rejected' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'title',
		'description',
		'general_rating',
		'spa_rating',
		'restaurant_rating',
		'moderated',
		'moderator',
		'rejected',
		'rejector',
		'rejected_reason',
		'valid_from',
		'valid_to'
	];
}
