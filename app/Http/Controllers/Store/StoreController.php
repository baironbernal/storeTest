<?php

namespace App\Http\Controllers\Store;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function viewCategory($category_name, $id)
    {
        $products = Product::where('category_id', $id)->paginate(20);
        
        return view('store.listByCategory', compact('products', 'category_name'));
    }
}
