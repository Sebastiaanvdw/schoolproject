<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 1)->create(array(
            'name' => 'Tim1',
            'email' => 'Tim@gmail.com',
            'password' => '123456'
        ));

    }
}
