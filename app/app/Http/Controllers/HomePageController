<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function demo()
    {
        $countries = Country::all()->toArray();;
        return new JsonResponse($countries);
    }
}
