<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerTitleDescription
 * 
 * @property int $title_desc_id
 * @property int $title_id
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class CustomerTitleDescription extends Model
{
	protected $table = 'customer_title_description';
	protected $primaryKey = 'title_desc_id';
	public $timestamps = false;

	protected $casts = [
		'title_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'title_id',
		'description',
		'language_id'
	];
}
