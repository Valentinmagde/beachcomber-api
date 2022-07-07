<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerContact
 * 
 * @property int $id
 * @property int $reseller_id
 * @property int $type_id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $fax
 * @property bool $active
 *
 * @package App\Models
 */
class ResellerContact extends Model
{
	protected $table = 'reseller_contact';
	public $timestamps = false;

	protected $casts = [
		'reseller_id' => 'int',
		'type_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'reseller_id',
		'type_id',
		'name',
		'email',
		'phone',
		'fax',
		'active'
	];
}
