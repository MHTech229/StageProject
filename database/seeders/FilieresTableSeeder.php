<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("filieres")->insert([
            ["libelle" => "Génie Logiciel"],
            ["libelle" => "Sécurité Informatique"],
            ["libelle" => "Internet et Multimedia"],
            ["libelle" => "Intelligence artificielle"],
        ]);
    }
}
