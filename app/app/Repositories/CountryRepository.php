<?php

namespace App\Repositories;

use App\Models\Country;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CountryRepository
 * @package App\Repositories
 * @version September 11, 2018, 12:37 pm UTC
 *
 * @method Country findWithoutFail($id, $columns = ['*'])
 * @method Country find($id, $columns = ['*'])
 * @method Country first($columns = ['*'])
*/
class CountryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'printable_name',
        'printable_name_cn',
        'iso3',
        'numcode',
        'post_code_rule',
        'telephone_rule'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}
