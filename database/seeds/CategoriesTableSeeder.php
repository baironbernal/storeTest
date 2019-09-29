<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Literatura", "Comedia", "Ficcion"];

        foreach ($categories as $item) {
            Category::create([
                "name" => $item,
                "store_id" => 1, 
            ]);
        }

        return true;
    }
}
