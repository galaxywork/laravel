<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all()->toArray();

        return response()->json($countries);
    }

    public function store(CountryRequest $request)
    {
        $country = Country::create($request->all());

        return response()->json($country, 201);
    }

    public function show($id)
    {
        $country = Country::findOrFail($id);

        return response()->json($country);
    }

    public function update(CountryRequest $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->update($request->all());

        return response()->json($country, 200);
    }

    public function destroy($id)
    {
        Country::destroy($id);

        return response()->json(null, 204);
    }
}
