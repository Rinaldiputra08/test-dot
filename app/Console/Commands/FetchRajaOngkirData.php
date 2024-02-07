<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FetchRajaOngkirData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rajaongkir:fetch-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches province and city data from RajaOngkir API and stores it in the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $apiKey = '0df6d5bf733214af6c6644eb8717c92c';

        // Fetch province data
        $response = $client->get('https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => $apiKey
            ]
        ]);

        $provinces = json_decode($response->getBody(), true)['rajaongkir']['results'];

        // Save province data to the database
        foreach ($provinces as $province) {
            DB::table('provinces')->updateOrInsert([
                'province_id' => $province['province_id']
            ], [
                'province_name' => $province['province']
            ]);
        }

        // Fetch city data
        $response = $client->get('https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => $apiKey
            ]
        ]);

        $cities = json_decode($response->getBody(), true)['rajaongkir']['results'];

        // Save city data to the database
        foreach ($cities as $city) {
            DB::table('cities')->updateOrInsert([
                'city_id' => $city['city_id']
            ], [
                'province_id' => $city['province_id'],
                'province' => $city['province'],
                'type' => $city['type'],
                'city_name' => $city['city_name'],
                'postal_code' => $city['postal_code']
            ]);
        }

        $this->info('Data fetched and stored successfully.');
    }
}
