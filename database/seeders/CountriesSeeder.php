<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/countries.json'));
        $data = json_decode($json, true);

        // Process data in chunks
        foreach (array_chunk($data, 1000) as $chunk) {
            foreach ($chunk as $item) {
                Country::create([
                    'sortname' => $item['sortname'],
                    'name' => $item['name'],
                    'phoneCode' => $item['phoneCode'],
                ]);
            }
        }
    }
}
