<?php

use App\Cabin;
use App\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabinsFeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $featuresFirstId = Feature::orderBy('id')->first()->id;
        $featuresLastId = Feature::orderBy('id', 'desc')->first()->id;


        Cabin::all()->each(function ($cabin) use ($faker, $featuresFirstId, $featuresLastId) {
            $limit = $faker->numberBetween(1, 10);

            for ($i = 0; $i < $limit; $i++) {
                $timestamp = $faker->dateTime;
                $feature_id = $faker->numberBetween($featuresFirstId, $featuresLastId);

                DB::table('cabins_features')->insert([
                    'cabin_id' => $cabin->id,
                    'feature_id' => $feature_id,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]);
            }
        });
    }
}
