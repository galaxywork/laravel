<?php

use Faker\Factory as Faker;
use App\Models\model=Country;
use App\Repositories\model=CountryRepository;

trait Makemodel=CountryTrait
{
    /**
     * Create fake instance of model=Country and save it in database
     *
     * @param array $model=CountryFields
     * @return model=Country
     */
    public function makemodel=Country($model=CountryFields = [])
    {
        /** @var model=CountryRepository $model=CountryRepo */
        $model=CountryRepo = App::make(model=CountryRepository::class);
        $theme = $this->fakemodel=CountryData($model=CountryFields);
        return $model=CountryRepo->create($theme);
    }

    /**
     * Get fake instance of model=Country
     *
     * @param array $model=CountryFields
     * @return model=Country
     */
    public function fakemodel=Country($model=CountryFields = [])
    {
        return new model=Country($this->fakemodel=CountryData($model=CountryFields));
    }

    /**
     * Get fake data of model=Country
     *
     * @param array $postFields
     * @return array
     */
    public function fakemodel=CountryData($model=CountryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'printable_name' => $fake->word,
            'printable_name_cn' => $fake->word,
            'iso3' => $fake->word,
            'numcode' => $fake->word,
            'post_code_rule' => $fake->text,
            'telephone_rule' => $fake->text
        ], $model=CountryFields);
    }
}
