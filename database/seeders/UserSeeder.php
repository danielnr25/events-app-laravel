<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "empresa"=>"Empresa de ejemplo",
            "name" => "Daniel Nuñez Rodas",
            "username" => "administrador",
            "email" => "admin@example.com",
            'password' => Hash::make('123456'),
            "role" => "admin"
        ]);
        DB::table('users')->insert([
            "empresa"=>"Empresa 1",
            "name" => "Usuario 1",
            "username" => "Usuario Name",
            "email" => "usuario1@example.com",
            'password' => Hash::make('123456'),
            "role" => "user"
        ]);
        DB::table('users')->insert([
            "empresa"=>"Empresa 2",
            "name" => "Usuario 2",
            "username" => "Usuario 2",
            "email" => "usuario2@example.com",
            'password' => Hash::make('123456'),
            "role" => "user"
        ]);
        DB::table('users')->insert([
            "empresa"=>"Empresa 3",
            "name" => "Usuario 3",
            "username" => "Usuario 3",
            "email" => "usuario3@example.com",
            'password' => Hash::make('123456'),
            "role" => "user"
        ]);
    }
}
