<?php

namespace App\Repositories;

use App\Models\model=Country;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class model=CountryRepository
 * @package App\Repositories
 * @version September 11, 2018, 12:36 pm UTC
 *
 * @method model=Country findWithoutFail($id, $columns = ['*'])
 * @method model=Country find($id, $columns = ['*'])
 * @method model=Country first($columns = ['*'])
*/
class model=CountryRepository extends BaseRepository
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
        return model=Country::class;
    }
}
