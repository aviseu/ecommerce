<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seeds Users
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'username'   => 'admin',
            'first_name' => 'Admin',
            'last_name'  => 'User',
            'email'      => 'admin@ecommerce.local',
            'password'   => bcrypt('123'),
            'type'       => 'admin',
        ]);

        factory(\App\Models\User::class)->create([
            'username'   => 'customer',
            'first_name' => 'Customer',
            'last_name'  => 'User',
            'email'      => 'customer@ecommerce.local',
            'password'   => bcrypt('123'),
            'type'       => 'customer',
        ]);
    }
}