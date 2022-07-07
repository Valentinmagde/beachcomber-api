<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TermCategory
 * 
 * @property int $term_category_id
 * @property string $name
 * @property Carbon|null $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TermCategory extends Model
{
	protected $table = 'term_category';
	protected $primaryKey = 'term_category_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'name',
		'valid_from',
		'valid_to'
	];
}
