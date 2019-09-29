<?php

use App\Models\Variant;
use Illuminate\Database\Seeder;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Variant::class, 50)->create();
    }
}
