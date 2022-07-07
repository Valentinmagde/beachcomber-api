<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CareerInterest
 * 
 * @property int $career_interest_id
 * @property string|null $description
 * @property int|null $active
 *
 * @package App\Models
 */
class CareerInterest extends Model
{
	protected $table = 'career_interest';
	protected $primaryKey = 'career_interest_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'description',
		'active'
	];
}
