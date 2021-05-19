<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newTravel = new Travel();
            $newTravel->destination_state = $faker->state();
            $newTravel->destination_city = $faker->city();
            $newTravel->date = $faker->date();
            $newTravel->n_people = $faker->numberBetween(1, 20);
            $newTravel->price = $faker->randomFloat(2);
            $newTravel->duration_days = $faker->numberBetween(1, 365);
            $newTravel->save();
        }
    }
}
