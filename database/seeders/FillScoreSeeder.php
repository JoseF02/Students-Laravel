<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;

class FillScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        Student::all()->each(function ($user) use ($faker) {
            $user->score = $faker->numberBetween(0, 100);
            $user->save();
        });
    }
}
