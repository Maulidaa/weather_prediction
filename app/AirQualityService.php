<?php

namespace App;
use Illuminate\Support\Facades\Http;


class AirQualityService
{
    private $apiUrl;
    private $token;

    /**
     * Create a new class instance.
     */

    public function __construct()
    {
        $this->apiUrl = config('services.air_quality.url');
        $this->token = config('services.air_quality.token');
    }

    public function getAirQualityData()
    {
        $response = Http::get($this->apiUrl . '?token=' . $this->token);

        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }

    public function getAirQuality(string $location)
    {
        $response = Http::get("{$this->apiUrl}{$location}/", [
            'token' => $this->token,
        ]);

        if ($response->ok()) {
            return $response->json();
        }

        return ['status' => 'error', 'message' => 'Unable to fetch data'];
    }
}
