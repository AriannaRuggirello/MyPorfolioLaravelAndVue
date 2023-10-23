<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

                'name' => 'Arianna',
                'email'=> 'ruggirelloarianna11@gmail.com',
                'password'=>bcrypt('12345')

        ]);
    }
}
