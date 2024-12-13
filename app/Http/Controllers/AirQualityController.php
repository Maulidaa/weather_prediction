<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirQualityService;

class AirQualityController extends Controller
{
    protected $airQualityService;

    public function __construct(AirQualityService $airQualityService)
    {
        $this->airQualityService = $airQualityService;
    }

    public function index()
    {
        $data = $this->airQualityService->getAirQualityData();

        return view('air-quality', compact('data'));
    }

    public function show($location)
    {
        $data = $this->airQualityService->getAirQuality($location);
        return response()->json($data);
    }
}
