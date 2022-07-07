<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentAssociation
 * 
 * @property int $content_association_id
 * @property string $associated_table
 * @property int $active
 *
 * @package App\Models
 */
class ContentAssociation extends Model
{
	protected $table = 'content_association';
	protected $primaryKey = 'content_association_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'associated_table',
		'active'
	];
}
