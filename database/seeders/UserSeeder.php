<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name'=>'Estuardo Cortez',
           'phone'=>'4455626',
           'email'=>'estuardo1206@gmail.com',
           'profile' =>'ADMIN',
           'status' =>'ACTIVE',
           'password'=>bcrypt('12345678')
       ]);

       User::create([
        'name'=>'Melissa Sanchez',
        'phone'=>'787566',
        'email'=>'melissa@gmail.com',
        'profile' =>'EMPLOYEE',
        'status' =>'ACTIVE',
        'password'=>bcrypt('12345678')
    ]);
    }
}