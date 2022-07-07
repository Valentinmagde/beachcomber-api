<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 * 
 * @property int $language_id
 * @property string $language
 * @property string $language_iso_code
 * @property string $language_flag_name
 * @property string $language_web
 * @property string $language_paybox
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'language';
	protected $primaryKey = 'language_id';
	public $timestamps = false;

	protected $fillable = [
		'language',
		'language_iso_code',
		'language_flag_name',
		'language_web',
		'language_paybox'
	];
}
