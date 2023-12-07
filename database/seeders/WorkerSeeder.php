<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = \Faker\Factory::create();

       DB::table("workers")->insert([
        "name" => $faker->name,
        "email" => $faker->email,
        "age" => $faker->numberBetween(20,50)
       ]);
    }
}
