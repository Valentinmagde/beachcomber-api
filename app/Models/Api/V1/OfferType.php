<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferType
 * 
 * @property int $offer_type_id
 * @property int|null $offer_main_type_id
 * @property string|null $offer_type_code
 * @property string|null $starlight_code
 * @property string|null $hms_code
 * @property bool|null $used_for_pms_rate_plan
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int|null $calculation_ranking
 * @property int|null $display_ranking
 * @property bool|null $is_themed
 * @property string|null $bg_color
 * @property string|null $text_color
 * @property string|null $image_path
 * @property string|null $image_name
 * @property bool|null $in_offer_list
 * @property bool|null $is_available_online
 * @property bool $is_standard
 * @property bool $is_user_triggered
 * @property int|null $rm_offer_type_id
 *
 * @package App\Models
 */
class OfferType extends Model
{
	protected $table = 'offer_type';
	protected $primaryKey = 'offer_type_id';
	public $timestamps = false;

	protected $casts = [
		'offer_main_type_id' => 'int',
		'used_for_pms_rate_plan' => 'bool',
		'calculation_ranking' => 'int',
		'display_ranking' => 'int',
		'is_themed' => 'bool',
		'in_offer_list' => 'bool',
		'is_available_online' => 'bool',
		'is_standard' => 'bool',
		'is_user_triggered' => 'bool',
		'rm_offer_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'offer_main_type_id',
		'offer_type_code',
		'starlight_code',
		'hms_code',
		'used_for_pms_rate_plan',
		'valid_from',
		'valid_to',
		'calculation_ranking',
		'display_ranking',
		'is_themed',
		'bg_color',
		'text_color',
		'image_path',
		'image_name',
		'in_offer_list',
		'is_available_online',
		'is_standard',
		'is_user_triggered',
		'rm_offer_type_id'
	];
}
