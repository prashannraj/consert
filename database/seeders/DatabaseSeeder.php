<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Configuration;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234'),
            'email_verified_at' => Carbon::now()
        ]);

        Configuration::factory(1)->create([
            'config' => json_decode('{"logo":"==-.jpg","thumbnail":"==-.jpg","favicon":"==-.jpg","principal_signature":"==-.jpg","contact":"9844644087","copyright":"&copy; 2023 All right reserved","landing_description":"Write description here."}')
        ]);
    }
}
