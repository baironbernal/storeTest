<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            "name" => "Colombia",
            "currency" => "Peso",
            "currency_value" => 1,
            "lang" => "es",
            "code" => "CO"
        ]);
    }
}
