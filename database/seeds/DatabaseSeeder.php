<?php

use Illuminate\Database\Seeder;
use App\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UserTableSeeder::class);
        $this->call(OccupationsTableSeeder::class);
        Model::reguard();

    }
}
