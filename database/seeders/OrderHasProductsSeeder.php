<?php

namespace Database\Seeders;

use App\Models\OrderHasProducts;
use Illuminate\Database\Seeder;

class OrderHasProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderHasProducts::factory(50)->create();
    }
}
