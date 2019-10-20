<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function viewCategory($category_name, $id)
    {
        $products = DB::table('info_products')->where('category_id', $id)->paginate(20);
        
        return view('store.listByCategory', compact('products', 'category_name'));
    }
}
