<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 12:37:08 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Country
 * 
 * @property string $iso
 * @property string $name
 * @property string $printable_name
 * @property string $printable_name_cn
 * @property string $iso3
 * @property int $numcode
 * @property string $post_code_rule
 * @property string $telephone_rule
 *
 * @package App\Models\Base
 */
class Country extends Eloquent
{
	protected $table = 'country';
	protected $primaryKey = 'iso';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numcode' => 'int'
	];
}
