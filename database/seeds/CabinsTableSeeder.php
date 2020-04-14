<?php

use App\Cabin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rentals')->delete();
        DB::table('cabins_pictures')->delete();
        DB::table('cabins_features')->delete();
        DB::table('cabins')->delete();

        factory(Cabin::class, 20)->create();
    }
}
