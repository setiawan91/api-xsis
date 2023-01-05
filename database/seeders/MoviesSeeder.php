<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Pengabdi Setan 2 Comunion', 'description' => 'adalah sebuah film horor Indonesia tahun 2022 yang disutradarai dan 
ditulis oleh Joko Anwar sebagai sekuel dari film tahun 2017, Pengabdi 
Setan.', 'rating' => '7', 'image' => ''],
        ];
        foreach ($data as $key => $value) {
            Movies::create($value);
        }
    }
}
