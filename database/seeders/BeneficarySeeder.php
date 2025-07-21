<?php

namespace Database\Seeders;

use App\Models\Beneficiary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class BeneficarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/beneficaries.json'));
        $data = json_decode($json, true);

        // Process data in chunks
        foreach (array_chunk($data, 1000) as $chunk) {
            foreach ($chunk as $item) {
                Beneficiary::create([
        "student_name"=> $item['student_name'],
        "student_address"=>$item['student_address'],
        "guardian_name"=>$item['guardian_name'],
        "guardian_mobile"=>$item['guardian_mobile'],
        "student_mobile"=>$item['student_mobile'],
        "course_name"=>$item['course_name'],
        "course_term"=>$item['course_term'],
        "college_name_address"=>$item['college_name_address'],
        "amt_per_annum"=>$item['amt_per_annum'],
        "financial_yr"=>$item['financial_yr'],
        "status"=>$item['status']
                ]);
            }
        }
    }
}
