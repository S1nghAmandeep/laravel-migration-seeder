<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->bothify('######');
            $newTrain->currage_number = $faker->numberBetween(1, 40);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->canceled = $faker->numberBetween(0, 1);
            $newTrain->price = $faker->randomFloat(2, 1, 1000);

            $newTrain->save();
        }
    }
}
