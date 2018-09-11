<?php

use Faker\Factory as Faker;
use App\Models\Country;
use App\Repositories\CountryRepository;

trait MakeCountryTrait
{
    /**
     * Create fake instance of Country and save it in database
     *
     * @param array $countryFields
     * @return Country
     */
    public function makeCountry($countryFields = [])
    {
        /** @var CountryRepository $countryRepo */
        $countryRepo = App::make(CountryRepository::class);
        $theme = $this->fakeCountryData($countryFields);
        return $countryRepo->create($theme);
    }

    /**
     * Get fake instance of Country
     *
     * @param array $countryFields
     * @return Country
     */
    public function fakeCountry($countryFields = [])
    {
        return new Country($this->fakeCountryData($countryFields));
    }

    /**
     * Get fake data of Country
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCountryData($countryFields = [])
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
        ], $countryFields);
    }
}
