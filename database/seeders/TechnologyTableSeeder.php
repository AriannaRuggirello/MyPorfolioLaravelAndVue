<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::insert([
            [
                'name' => 'Html',
                'icon' => 'fa-brands fa-html5',

            ],
            [
                'name' => 'Css',
                'icon' => 'fa-brands fa-css3-alt',
            ],
            [
                'name' => 'Javascript',
                'icon' => 'fa-brands fa-js',
            ],
            [
                'name' => 'Vue',
                'icon' => 'fa-brands fa-vuejs',
            ],
            [
                'name' => 'Php',
                'icon' => 'fa-brands fa-php',
            ],
            [
                'name' => 'MySQL',
                'icon' => 'fa-solid fa-database',
            ],
            [
                'name' => 'Laravel',
                'icon' => 'fa-brands fa-laravel'
            ],
            [
                'name' => 'SASS',
                'icon' => 'fa-brands fa-sass'
            ],
        ]);
    }
}
