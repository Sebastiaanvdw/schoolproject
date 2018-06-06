<?php

use Illuminate\Database\Seeder;

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
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        Model::reguard();
    }
}
