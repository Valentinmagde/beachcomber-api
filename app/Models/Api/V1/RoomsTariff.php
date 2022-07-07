<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomsTariff
 * 
 * @property int $id_r_tariff
 * @property int|null $id_room
 * @property Carbon|null $tariff_from
 * @property Carbon|null $tariff_to
 * @property string|null $tariff_claim
 * @property string|null $tariff_claim_curr
 * @property float|null $tariff_claim_child
 * @property float|null $tariff_claim_teen
 * @property float|null $tariff_claim_adult
 * @property float|null $tariff_claim_other
 * @property string|null $tariff_cost
 * @property string|null $tariff_cost_curr
 * @property float|null $tariff_cost_child
 * @property float|null $tariff_cost_teen
 * @property float|null $tariff_cost_adult
 * @property float|null $tariff_cost_other
 * @property string|null $tariff_bcot
 * @property float|null $tariff_bcot_val
 * @property int|null $tariff_maxchild
 * @property float|null $tariff_maxchild_val
 * @property int|null $tariff_maxteen
 * @property float|null $tariff_maxteen_val
 * @property int|null $tariff_maxadult
 * @property float|null $tariff_maxadult_val
 * @property string|null $tariff_cost_bcot
 * @property float|null $tariff_cost_bcot_val
 * @property int|null $tariff_cost_maxchild
 * @property float|null $tariff_cost_maxchild_val
 * @property int|null $tariff_cost_maxteen
 * @property float|null $tariff_cost_maxteen_val
 * @property int|null $tariff_cost_maxadult
 * @property float|null $tariff_cost_maxadult_val
 * @property string|null $tariff_remarks
 * @property string $tariff_comm_type
 * @property float $tariff_comm
 * @property int $id_tariff_type
 * @property int $active
 * @property int|null $tariff_for
 *
 * @package App\Models
 */
class RoomsTariff extends Model
{
	protected $table = 'rooms_tariffs';
	protected $primaryKey = 'id_r_tariff';
	public $timestamps = false;

	protected $casts = [
		'id_room' => 'int',
		'tariff_claim_child' => 'float',
		'tariff_claim_teen' => 'float',
		'tariff_claim_adult' => 'float',
		'tariff_claim_other' => 'float',
		'tariff_cost_child' => 'float',
		'tariff_cost_teen' => 'float',
		'tariff_cost_adult' => 'float',
		'tariff_cost_other' => 'float',
		'tariff_bcot_val' => 'float',
		'tariff_maxchild' => 'int',
		'tariff_maxchild_val' => 'float',
		'tariff_maxteen' => 'int',
		'tariff_maxteen_val' => 'float',
		'tariff_maxadult' => 'int',
		'tariff_maxadult_val' => 'float',
		'tariff_cost_bcot_val' => 'float',
		'tariff_cost_maxchild' => 'int',
		'tariff_cost_maxchild_val' => 'float',
		'tariff_cost_maxteen' => 'int',
		'tariff_cost_maxteen_val' => 'float',
		'tariff_cost_maxadult' => 'int',
		'tariff_cost_maxadult_val' => 'float',
		'tariff_comm' => 'float',
		'id_tariff_type' => 'int',
		'active' => 'int',
		'tariff_for' => 'int'
	];

	protected $dates = [
		'tariff_from',
		'tariff_to'
	];

	protected $fillable = [
		'id_room',
		'tariff_from',
		'tariff_to',
		'tariff_claim',
		'tariff_claim_curr',
		'tariff_claim_child',
		'tariff_claim_teen',
		'tariff_claim_adult',
		'tariff_claim_other',
		'tariff_cost',
		'tariff_cost_curr',
		'tariff_cost_child',
		'tariff_cost_teen',
		'tariff_cost_adult',
		'tariff_cost_other',
		'tariff_bcot',
		'tariff_bcot_val',
		'tariff_maxchild',
		'tariff_maxchild_val',
		'tariff_maxteen',
		'tariff_maxteen_val',
		'tariff_maxadult',
		'tariff_maxadult_val',
		'tariff_cost_bcot',
		'tariff_cost_bcot_val',
		'tariff_cost_maxchild',
		'tariff_cost_maxchild_val',
		'tariff_cost_maxteen',
		'tariff_cost_maxteen_val',
		'tariff_cost_maxadult',
		'tariff_cost_maxadult_val',
		'tariff_remarks',
		'tariff_comm_type',
		'tariff_comm',
		'id_tariff_type',
		'active',
		'tariff_for'
	];
}
