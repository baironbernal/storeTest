<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = ['Bogota', 'Medellin', 'Cali', 'Cartagena', 'Barranquilla', 'Pasto'];

        foreach ($cities as $city) {
            City::create([
                "name" => $city,
                "description" => $city,
                "country_id" =>  1,
            ]);
        }

        return true;
    }
}
