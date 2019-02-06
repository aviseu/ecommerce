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
        ]);
    }
}