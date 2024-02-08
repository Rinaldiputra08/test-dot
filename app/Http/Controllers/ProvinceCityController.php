<?php

namespace App\Http\Controllers;

use App\Services\ProvinceCityService;
use Illuminate\Http\Request;

class ProvinceCityController extends Controller
{
    private $provinceCityService;

    public function __construct(ProvinceCityService $provinceCityService)
    {
        $this->provinceCityService = $provinceCityService;
    }

    public function getProvinces(Request $request)
    {
        return response()->json($this->provinceCityService->getProvinces());
    }

    public function getCities(Request $request)
    {
        return response()->json($this->provinceCityService->getCities());
    }
}
