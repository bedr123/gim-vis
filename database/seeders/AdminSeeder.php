<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::insert([
            'name' => 'gimvis',
            'username' => 'gimvis',
            'email' => 'skola@gimvis.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
