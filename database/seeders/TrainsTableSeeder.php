<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $trains = new Train();
            $trains->price = $faker->randomFloat(2, 10, 300);
            $trains->company = $faker->word();
            $trains->departure_station = $faker->city();
            $trains->arrival_station = $faker->city();
            $trains->departure_time = $faker->dateTime();
            $trains->arrival_time = $faker->dateTime();
            $trains->train_code = $faker->randomNumber(8, true);
            $trains->wagon_number = $faker->randomDigitNotNull(0);
            $trains->save();
        }
    }
}
