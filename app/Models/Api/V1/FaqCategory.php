<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqCategory
 * 
 * @property int $category_id
 * @property string $category_alias
 * @property Carbon|null $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 * @property int $parent_id
 * @property int $weight
 *
 * @package App\Models
 */
class FaqCategory extends Model
{
	protected $table = 'faq_category';
	protected $primaryKey = 'category_id';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'weight' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'category_alias',
		'valid_from',
		'valid_to',
		'created',
		'parent_id',
		'weight'
	];
}
