<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/cities.json'));
        $data = json_decode($json, true);

        // Process data in chunks
        foreach (array_chunk($data, 1000) as $chunk) {
            foreach ($chunk as $item) {
                City::create([
                    'name' => $item['name'],
                    'state_id' => $item['state_id'],
                ]);
            }
        }
    }
}
