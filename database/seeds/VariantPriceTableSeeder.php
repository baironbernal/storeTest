<?php

use App\Models\VariantPrice;
use Illuminate\Database\Seeder;

class VariantPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VariantPrice::class, 50)->create();
    }
}
