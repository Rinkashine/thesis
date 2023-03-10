<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers') ->insert([
            [//1 - Mainly Used Customers - Begin
                'name' => 'Mark Joseph Manalo',
                'email' => 'markjosephmanalo1110@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-1-1 00:00:00',
                'updated_at' => '2019-1-1 00:00:00',
            ],
            [//2
                'name' => 'Gene Vincent Soriano',
                'email' => 'programmingmind1110@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-1-1 00:00:00',
                'updated_at' => '2019-1-1 00:00:00',
            ],
            [//3
                'name' => 'Paul Reyes',
                'email' => 'pcreyes09@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-3-1 00:00:00',
                'updated_at' => '2019-3-1 00:00:00',
            ],
            [//4
                'name' => 'Miguel Silverio',
                'email' => 'miguel2021@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-7-1 00:00:00',
                'updated_at' => '2020-7-1 00:00:00',
            ],
            [//5
                'name' => 'John Zenmar Repil',
                'email' => 'jzenman21@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-8-1 00:00:00',
                'updated_at' => '2020-8-1 00:00:00',
            ],
            [//6
                'name' => 'Aaron Delos Angeles',
                'email' => 'ponponpon@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-10-1 00:00:00',
                'updated_at' => '2020-10-1 00:00:00',
            ],
            [//7
                'name' => 'Joshua Atos',
                'email' => 'joskykun@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-12-1 00:00:00',
                'updated_at' => '2020-12-1 00:00:00',
            ],
            [//8
                'name' => 'Rence Tyler',
                'email' => 'TRence21@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-12-1 00:00:00',
                'updated_at' => '2020-12-1 00:00:00',
            ],
            [//9
                'name' => 'Claire Mendoza',
                'email' => 'mendozaclaire11@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-1-1 00:00:00',
                'updated_at' => '2021-1-1 00:00:00',
            ],
            [//10
                'name' => 'Nathaniel Recla',
                'email' => 'recla118@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-2-1 00:00:00',
                'updated_at' => '2021-2-1 00:00:00',
            ],
            [//11
                'name' => 'Joy Tolentino',
                'email' => 'cupcakejj21@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-3-1 00:00:00',
                'updated_at' => '2021-3-1 00:00:00',
            ],
            [//12
                'name' => 'Jerson Jake Tejada',
                'email' => 'jaket172@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-3-1 00:00:00',
                'updated_at' => '2021-3-1 00:00:00',
            ],
            [//13
                'name' => 'Jahred Garcia',
                'email' => 'jahjahganda@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-3-1 00:00:00',
                'updated_at' => '2021-3-1 00:00:00',
            ],
            [//14
                'name' => 'Oly Andreza',
                'email' => 'olygeh21@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-4-1 00:00:00',
                'updated_at' => '2021-4-1 00:00:00',
            ],
            [//15
                'name' => 'Charm Belmonte',
                'email' => 'charring48@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-4-1 00:00:00',
                'updated_at' => '2021-4-1 00:00:00',
            ],
            [//16
                'name' => 'Juliane Adaoag',
                'email' => 'jaaaa772@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-5-1 00:00:00',
                'updated_at' => '2021-5-1 00:00:00',
            ],
            [//17
                'name' => 'Ericka Barrales',
                'email' => 'ErickaB281@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-5-1 00:00:00',
                'updated_at' => '2021-5-1 00:00:00',
            ],
            [//18
                'name' => 'Dandy Andreza',
                'email' => 'sonnyboy@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-5-1 00:00:00',
                'updated_at' => '2021-5-1 00:00:00',
            ],
            [//19
                'name' => 'Joel Montemayor',
                'email' => 'Montemayorjoel@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-5-1 00:00:00',
                'updated_at' => '2021-5-1 00:00:00',
            ],
            [//20
                'name' => 'Francis Estabilo',
                'email' => 'France1233@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-6-1 00:00:00',
                'updated_at' => '2021-6-1 00:00:00',
            ],
            [//21
                'name' => 'Cielo Fernandez',
                'email' => 'Cieloows66@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-6-1 00:00:00',
                'updated_at' => '2021-6-1 00:00:00',
            ],// Mainly Used Customers - End
            [// Filler Customers - Begin - 2019
                'name' => 'Danielle Cannon',
                'email' => 'filler1@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-1-1 00:00:00',
                'updated_at' => '2019-1-1 00:00:00',
            ],
            [
                'name' => 'Rishi Faulkner',
                'email' => 'filler2@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-2-1 00:00:00',
                'updated_at' => '2019-2-1 00:00:00',
            ],
            [
                'name' => 'Cindy Kent',
                'email' => 'filler3@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-2-1 00:00:00',
                'updated_at' => '2019-2-1 00:00:00',
            ],
            [
                'name' => 'Jenny Vargas',
                'email' => 'filler4@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-2-1 00:00:00',
                'updated_at' => '2019-2-1 00:00:00',
            ],
            [
                'name' => 'Diego Frost',
                'email' => 'filler5@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-3-1 00:00:00',
                'updated_at' => '2019-3-1 00:00:00',
            ],
            [
                'name' => 'Diego Frost',
                'email' => 'filler6@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-3-1 00:00:00',
                'updated_at' => '2019-3-1 00:00:00',
            ],
            [
                'name' => 'Chelsea Logan',
                'email' => 'filler7@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-4-1 00:00:00',
                'updated_at' => '2019-4-1 00:00:00',
            ],
            [
                'name' => 'Ali Golden',
                'email' => 'filler8@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-5-1 00:00:00',
                'updated_at' => '2019-5-1 00:00:00',
            ],
            [
                'name' => 'Aoife Griffith',
                'email' => 'filler9@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-5-1 00:00:00',
                'updated_at' => '2019-5-1 00:00:00',
            ],
            [
                'name' => 'Teddy Marsh',
                'email' => 'filler10@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-5-1 00:00:00',
                'updated_at' => '2019-5-1 00:00:00',
            ],
            [
                'name' => 'Neo Rowland',
                'email' => 'filler11@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-5-1 00:00:00',
                'updated_at' => '2019-5-1 00:00:00',
            ],
            [
                'name' => 'Tyrese Guzman',
                'email' => 'filler12@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-5-1 00:00:00',
                'updated_at' => '2019-5-1 00:00:00',
            ],
            [
                'name' => 'Taha Mahoney',
                'email' => 'filler13@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-6-1 00:00:00',
                'updated_at' => '2019-6-1 00:00:00',
            ],
            [
                'name' => 'Macy Love',
                'email' => 'filler14@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-6-1 00:00:00',
                'updated_at' => '2019-6-1 00:00:00',
            ],
            [
                'name' => 'Leighton Cooper',
                'email' => 'filler15@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-7-1 00:00:00',
                'updated_at' => '2019-7-1 00:00:00',
            ],
            [
                'name' => 'Katrina Bowman',
                'email' => 'filler16@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-9-1 00:00:00',
                'updated_at' => '2019-9-1 00:00:00',
            ],
            [
                'name' => 'Brooke Sawyer',
                'email' => 'filler17@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-9-1 00:00:00',
                'updated_at' => '2019-9-1 00:00:00',
            ],
            [
                'name' => 'Jesse White',
                'email' => 'filler18@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-10-1 00:00:00',
                'updated_at' => '2019-10-1 00:00:00',
            ],
            [
                'name' => 'Ollie Snow',
                'email' => 'filler19@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-11-1 00:00:00',
                'updated_at' => '2019-11-1 00:00:00',
            ],
            [
                'name' => 'Cordelia Hawkins',
                'email' => 'filler20@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2019-12-1 00:00:00',
                'updated_at' => '2019-12-1 00:00:00',
            ],
            [
                'name' => 'Benedict Wagner',
                'email' => 'filler21@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-3-1 00:00:00',
                'updated_at' => '2020-3-1 00:00:00',
            ],
            [
                'name' => 'Max Mathews',
                'email' => 'filler22@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-5-1 00:00:00',
                'updated_at' => '2020-5-1 00:00:00',
            ],
            [
                'name' => 'Jesse Sherman',
                'email' => 'filler23@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-6-1 00:00:00',
                'updated_at' => '2020-6-1 00:00:00',
            ],
            [
                'name' => 'Lee Riddle',
                'email' => 'filler24@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-6-1 00:00:00',
                'updated_at' => '2020-6-1 00:00:00',
            ],
            [
                'name' => 'Keziah Ellis',
                'email' => 'filler25@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-8-1 00:00:00',
                'updated_at' => '2020-8-1 00:00:00',
            ],
            [
                'name' => 'Teddy Ray',
                'email' => 'filler26@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-8-1 00:00:00',
                'updated_at' => '2020-8-1 00:00:00',
            ],
            [
                'name' => 'Zane Long',
                'email' => 'filler27@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-8-1 00:00:00',
                'updated_at' => '2020-8-1 00:00:00',
            ],
            [
                'name' => 'Ines Strong',
                'email' => 'filler28@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-10-1 00:00:00',
                'updated_at' => '2020-10-1 00:00:00',
            ],
            [
                'name' => 'Stevie Nielsen',
                'email' => 'filler29@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-11-1 00:00:00',
                'updated_at' => '2020-11-1 00:00:00',
            ],
            [
                'name' => 'Robbie Campos',
                'email' => 'filler30@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-12-1 00:00:00',
                'updated_at' => '2020-12-1 00:00:00',
            ],
            [
                'name' => 'Tegan Reyes',
                'email' => 'filler31@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2020-12-1 00:00:00',
                'updated_at' => '2020-12-1 00:00:00',
            ],
            [
                'name' => 'Liberty Moon',
                'email' => 'filler32@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-1-1 00:00:00',
                'updated_at' => '2021-1-1 00:00:00',
            ],
            [
                'name' => 'Flynn Reid',
                'email' => 'filler33@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-3-1 00:00:00',
                'updated_at' => '2021-3-1 00:00:00',
            ],
            [
                'name' => 'Katrina Shields',
                'email' => 'filler34@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-4-1 00:00:00',
                'updated_at' => '2021-4-1 00:00:00',
            ],
            [
                'name' => 'Cleo Jarvis',
                'email' => 'filler35@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-7-1 00:00:00',
                'updated_at' => '2021-7-1 00:00:00',
            ],
            [
                'name' => 'Asa Allison',
                'email' => 'filler36@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-9-1 00:00:00',
                'updated_at' => '2021-9-1 00:00:00',
            ],
            [
                'name' => 'Tommy Snyder',
                'email' => 'filler37@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-9-1 00:00:00',
                'updated_at' => '2021-9-1 00:00:00',
            ],
            [
                'name' => 'Alex Cole',
                'email' => 'filler38@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-12-1 00:00:00',
                'updated_at' => '2021-12-1 00:00:00',
            ],
            [
                'name' => 'Ty Riggs',
                'email' => 'filler39@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-12-1 00:00:00',
                'updated_at' => '2021-12-1 00:00:00',
            ],
            [
                'name' => 'Elena Mosley',
                'email' => 'filler40@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2021-12-1 00:00:00',
                'updated_at' => '2021-12-1 00:00:00',
            ],
            [
                'name' => 'Abu Wolf',
                'email' => 'filler41@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-2-1 00:00:00',
                'updated_at' => '2022-2-1 00:00:00',
            ],
            [
                'name' => 'Hamzah Hoover',
                'email' => 'filler42@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-2-1 00:00:00',
                'updated_at' => '2022-2-1 00:00:00',
            ],
            [
                'name' => 'Kobe Wyatt',
                'email' => 'filler43@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-4-1 00:00:00',
                'updated_at' => '2022-4-1 00:00:00',
            ],
            [
                'name' => 'Cohen Rosales',
                'email' => 'filler44@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-5-1 00:00:00',
                'updated_at' => '2022-5-1 00:00:00',
            ],
            [
                'name' => 'Rohan English',
                'email' => 'filler45@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-8-1 00:00:00',
                'updated_at' => '2022-8-1 00:00:00',
            ],
            [
                'name' => 'Frankie Glenn',
                'email' => 'filler46@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-8-1 00:00:00',
                'updated_at' => '2022-8-1 00:00:00',
            ],
            [
                'name' => 'Rex Black',
                'email' => 'filler47@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Female',
                'birthday'=>'2001-06-08',
                'created_at' => '2022-11-1 00:00:00',
                'updated_at' => '2022-11-1 00:00:00',
            ],
            [
                'name' => 'Amaan Lindsay',
                'email' => 'filler48@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2023-1-1 00:00:00',
                'updated_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => 'Jonty Donovan',
                'email' => 'filler49@gmail.com',
                'email_verified_at' => now(),
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2023-1-1 00:00:00',
                'updated_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => 'Aidan Nolan',
                'email' => 'filler50@gmail.com',
                'email_verified_at' => null,
                'phone_number' => '09452692274',
                'password' => bcrypt('Onepiece25!'),
                'gender' => 'Male',
                'birthday'=>'2001-06-08',
                'created_at' => '2023-2-1 00:00:00',
                'updated_at' => '2023-2-1 00:00:00',
            ],

        ]);

        Customer::factory(100)->create();
    }
}
