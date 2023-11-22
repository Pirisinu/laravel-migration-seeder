<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $train = new Train();
            $train->agency = $faker->name();
            $train->departure_station = $faker->words(3,true);
            $train->arrival_station = $faker->words(3,true);
            $train->departure_time = $faker->dateTime();
            $train->arrival_time = $faker->dateTime();
            $train->train_code = $faker->words(3,true);
            $train->number_of_carriages = $faker->numberBetween(10, 20);
            $train->in_the_timetable = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }
    }
}
