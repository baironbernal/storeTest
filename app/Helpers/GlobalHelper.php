<?php


namespace App\Helpers;

use App\Models\Category;

class GlobalHelper
{
    public static function getCategories() {
        return Category::all();
    }
}