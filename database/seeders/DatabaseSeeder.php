<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            // VehicleSeeder::class,
            CountriesSeeder::class,
            StatesSeeder::class,
            CitiesSeeder::class
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);
        $staff = User::factory()->create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
        ]);
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Staff']);

        $admin->assignRole($role1);
        $staff->assignRole($role2);


    }
}
