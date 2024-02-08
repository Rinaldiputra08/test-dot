<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ProvinceCityService
{
    public function getProvinces()
    {
        if (config('services.rajaongkir.use_database')) {
            return DB::table('provinces')->get();
        } else {
            $client = new Client();
            $apiKey = config('services.rajaongkir.api_key');
            $response = $client->get('https://api.rajaongkir.com/starter/province', [
                'headers' => [
                    'key' => $apiKey
                ]
            ]);
            return json_decode($response->getBody(), true)['rajaongkir']['results'];
        }
    }

    public function getCities()
    {
        if (config('services.rajaongkir.use_database')) {
            return DB::table('cities')->get();
        } else {
            $client = new Client();
            $apiKey = config('services.rajaongkir.api_key');
            $response = $client->get('https://api.rajaongkir.com/starter/city', [
                'headers' => [
                    'key' => $apiKey
                ]
            ]);
            return json_decode($response->getBody(), true)['rajaongkir']['results'];
        }
    }
}
