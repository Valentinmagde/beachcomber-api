<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JeuParticipant
 * 
 * @property int $participant_id
 * @property int|null $jeu_id
 * @property int|null $customer_id
 *
 * @package App\Models
 */
class JeuParticipant extends Model
{
	protected $table = 'jeu_participant';
	protected $primaryKey = 'participant_id';
	public $timestamps = false;

	protected $casts = [
		'jeu_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'jeu_id',
		'customer_id'
	];
}
