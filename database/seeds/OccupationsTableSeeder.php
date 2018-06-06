<?php

use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Occupations::class, 1)->create(array(
            'title' => 'Editor'
        ));
        factory(\App\Occupations::class, 1)->create(array(
            'title' => 'Marketing'
        ));
        factory(\App\Occupations::class, 1)->create(array(
            'title' => 'Communication'
        ));
        factory(\App\Occupations::class, 0)->create();
    }
}
