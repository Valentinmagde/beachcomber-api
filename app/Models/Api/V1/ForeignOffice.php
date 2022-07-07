<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ForeignOffice
 * 
 * @property int $foreign_office_id
 * @property string $foreign_office_name
 * @property string $foreign_office_email
 * @property string $foreign_office_phone
 * @property string $foreign_office_fax
 * @property string $foreign_office_address
 * @property string $foreign_office_countries_resposible
 * @property int $foreign_office_countries_type
 * @property string $foreign_office_countries_description
 * @property string $to_name
 * @property string $press_name
 * @property string $grp_name
 * @property string $event_name
 * @property string $agv_name
 * @property string $to_phone
 * @property string $press_phone
 * @property string $grp_phone
 * @property string $event_phone
 * @property string $agv_phone
 * @property string $to_mail
 * @property string $press_mail
 * @property string $grp_mail
 * @property string $event_mail
 * @property string $agv_mail
 *
 * @package App\Models
 */
class ForeignOffice extends Model
{
	protected $table = 'foreign_office';
	protected $primaryKey = 'foreign_office_id';
	public $timestamps = false;

	protected $casts = [
		'foreign_office_countries_type' => 'int'
	];

	protected $fillable = [
		'foreign_office_name',
		'foreign_office_email',
		'foreign_office_phone',
		'foreign_office_fax',
		'foreign_office_address',
		'foreign_office_countries_resposible',
		'foreign_office_countries_type',
		'foreign_office_countries_description',
		'to_name',
		'press_name',
		'grp_name',
		'event_name',
		'agv_name',
		'to_phone',
		'press_phone',
		'grp_phone',
		'event_phone',
		'agv_phone',
		'to_mail',
		'press_mail',
		'grp_mail',
		'event_mail',
		'agv_mail'
	];
}
