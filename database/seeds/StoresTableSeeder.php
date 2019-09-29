<?php

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Store::create([
            "name" => "Book Sede A1 Bogota",
            "description" => "Sede A1 en la ciudad de Bogota - Chapinero",
            "address" => "Cra 7 #53",
            "city_id" =>  1,
         ]);
    }
}
