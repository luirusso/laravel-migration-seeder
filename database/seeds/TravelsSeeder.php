<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

// Include Faker
use Faker\Generator as Faker;

// Include Model
use App\Travel;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            // Create row
            $new_travel = new Travel();

            // Create columns content
            $new_travel->location = $faker->state(50);
            $new_travel->price = $faker->numberBetween(0, 10000);
            // $new_travel->slug = Str::slug($new_travel->location, '-');

            // Save row inside db table
            $new_travel->save();
        }
    }
}
