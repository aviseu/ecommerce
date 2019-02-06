<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seeds Users
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Product::class, 20)->create();
    }
}