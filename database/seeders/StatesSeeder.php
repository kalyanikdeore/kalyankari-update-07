<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/states.json'));
        $data = json_decode($json, true);

        // Process data in chunks
        foreach (array_chunk($data, 1000) as $chunk) {
            foreach ($chunk as $item) {
                State::create([
                    'name' => $item['name'],
                    'country_id' => $item['country_id'],
                ]);
            }
        }
    }
}
