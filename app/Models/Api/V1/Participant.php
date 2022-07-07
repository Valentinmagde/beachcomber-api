<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 * 
 * @property int $id
 * @property int $fid
 * @property int $photo_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $gender
 * @property string $locale
 * @property bool $newsletter
 * @property int $country_id
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class Participant extends Model
{
	protected $table = 'participants';
	public $timestamps = false;

	protected $casts = [
		'fid' => 'int',
		'photo_id' => 'int',
		'newsletter' => 'bool',
		'country_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'fid',
		'photo_id',
		'first_name',
		'last_name',
		'email',
		'gender',
		'locale',
		'newsletter',
		'country_id',
		'created'
	];
}
