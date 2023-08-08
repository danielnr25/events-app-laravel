<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            "title" => "Conciertos",
            "slug" => "conciertos",
            "image" => "https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ]);
        DB::table('categories')->insert([
            "title" => "Aniversarios y fiestas",
            "slug" => "aniversarios-y-fiestas",
            "image" => "https://images.pexels.com/photos/5005252/pexels-photo-5005252.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ]);
        DB::table('categories')->insert([
            "title" => "Baby shower",
            "slug" => "baby-shower",
            "image" => "https://images.pexels.com/photos/3593434/pexels-photo-3593434.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ]);
        DB::table('categories')->insert([
            "title" => "Dj y música",
            "slug" => "dj-y-musica",
            "image" => "https://images.pexels.com/photos/2240771/pexels-photo-2240771.jpeg?auto=compress&cs=tinysrgb&w=600"
        ]);
        DB::table('categories')->insert([
            "title" => "Fiestas infantiles",
            "slug" => "fiestas-infantiles",
            "image" => "https://images.pexels.com/photos/6518020/pexels-photo-6518020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ]);
    }
}
