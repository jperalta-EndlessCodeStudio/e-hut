<?php

use App\Cabin;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CabinsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(RentalsTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(CabinsPicturesTableSeeder::class);
        $this->call(CabinsFeaturesTableSeeder::class);
    }
}
