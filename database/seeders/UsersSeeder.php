<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "firstName" => "Natan",
            "lastName" => "Vitor Ferreira Dias",
            "email" => "natan@ti.com.br",
            "password" => bcrypt("123"),
        ]);
    }
}
