<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
            [
                'image'=> '',
                'title'=> 'Boolflix',
                'publish_year'=> '2023',
                'description'=>'prova descrizione',
                'link'=>'prova link',
                'type_id' => 1,
            ],

        ]);
    }
}
