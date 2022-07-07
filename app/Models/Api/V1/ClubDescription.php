<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClubDescription
 * 
 * @property int $club_desc_id
 * @property int $club_id
 * @property int $language_id
 * @property string $short_description
 * @property string $long_description
 * @property string $information
 * @property string $activities
 *
 * @package App\Models
 */
class ClubDescription extends Model
{
	protected $table = 'club_description';
	protected $primaryKey = 'club_desc_id';
	public $timestamps = false;

	protected $casts = [
		'club_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'club_id',
		'language_id',
		'short_description',
		'long_description',
		'information',
		'activities'
	];
}
