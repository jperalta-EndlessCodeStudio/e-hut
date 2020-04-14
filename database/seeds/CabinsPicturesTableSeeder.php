<?php

use App\Cabin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabinsPicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Cabin::all()->each(function ($cabin) use ($faker) {
            $imagesLimit = $faker->numberBetween(1,10);

            for ($i = 0; $i < $imagesLimit; $i++) {
                $timestamp = $faker->dateTime;

                DB::table('cabins_pictures')->insert([
                    'cabin_id' => $cabin->id,
                    'picture' => $faker->imageUrl(),
                    'thumbnail' => $faker->imageUrl(),
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]);
            }
        });
    }
}
