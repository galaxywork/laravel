<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class model=Country
 * @package App\Models
 * @version September 11, 2018, 12:35 pm UTC
 *
 * @property string name
 * @property string printable_name
 * @property string printable_name_cn
 * @property string iso3
 * @property smallInteger numcode
 * @property string post_code_rule
 * @property string telephone_rule
 */
class model=Country extends Model
{
    use SoftDeletes;

    public $table = 'country';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'printable_name',
        'printable_name_cn',
        'iso3',
        'numcode',
        'post_code_rule',
        'telephone_rule'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iso' => 'string',
        'name' => 'string',
        'printable_name' => 'string',
        'printable_name_cn' => 'string',
        'iso3' => 'string',
        'post_code_rule' => 'string',
        'telephone_rule' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
