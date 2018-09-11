<?php

namespace App\Models;

class Country extends \App\Models\Base\Country
{
	protected $fillable = [
		'name',
		'printable_name',
		'printable_name_cn',
		'iso3',
		'numcode',
		'post_code_rule',
		'telephone_rule'
	];
}
