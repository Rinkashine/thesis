<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mark Joseph Manalo',
            'email' => 'godentalph@gmail.com',
            'phone_number' => '09452692274',
            'address' => '283 Ramos Compound Baesa Quezon City',
            'password' => 'Onepiece25!',
            'gender' => 'male',
            'age' => '20',
        ]);
        $user->assignRole('Super Admin');

        User::create([
            'name' => 'Rinkashine Manalo',
            'email' => 'programmingmind1110@gmail.com',
            'phone_number' => '09369332354',
            'address' => '283 Ramos Compound Baesa Quezon City',
            'password' => 'Onepiece25!',
            'gender' => 'male',
            'age' => '20',
        ])->assignRole('Head Manager');

        User::create([
            'name' => 'Gene Vincent Soriano',
            'email' => 'gvasoriano2511@gmail.com',
            'phone_number' => '09611212652',
            'address' => '122 10-Bayan St., San Francisco Del Monte, Quezon City, Metro Manila ',
            'password' => 'Onepiece25!',
            'gender' => 'male',
            'age' => '20',
        ])->assignRole('Inventory Employee');

        User::create([
            'name' => 'Joshua Rae Atos',
            'email' => 'atos.joshuarae@gmail.com',
            'phone_number' => '09273766266',
            'address' => '14 A Matulungin St. Brgy. Central, Quezon City, Metro Manila',
            'password' => 'Onepiece25!',
            'gender' => 'male',
            'age' => '20',
        ])->assignRole('Customer Care Employee');

        User::create([
            'name' => 'Paul Reyes',
            'email' => 'pcreyes09@gmail.com',
            'phone_number' => '09953127516',
            'address' => 'Phs. 4 Blk 7 Lt. 7 Grand Royale subd., City of Malolos, Bulacan',
            'password' => 'Onepiece25!',
            'gender' => 'male',
            'age' => '20',
        ])->assignRole('Data Monitoring Employee');
    }
}
