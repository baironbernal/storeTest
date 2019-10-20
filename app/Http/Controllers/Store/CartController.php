<?php

namespace App\Http\Controllers\Store;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public $weight;
    public $discount;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->weight = 1;
        $this->discount = 1;
    }

    public function addToCart(Request $request)
    {
        $this->updateCart($request);

        return redirect()->back();   
    }

    public function getIdsProductsAdded(Object $cart) {
        $ids = [];
        foreach ($cart as $product) {
            $ids[] = $product->id;
        }
        return $ids;
    }

    public function getCart()
    {
        return Cart::content();
        
    }

    public function updateCart($request)
    {
        $cart = Cart::content();
        $productCart = $cart->where('id', $request->id)->first();
        
        if (empty($productCart)) {
            return Cart::add(['id' => $request->id,
                'name' => $request->name,
                'qty' => $request->amount,
                'weight' => $this->weight,
                'price' => $request->price,
            ]);
            
        }

        return Cart::update($productCart->rowId, ['qty' => $request->amount]);
        
    }


    public function removeItemCart(Request $request)
    {
        $cart = Cart::content();
        $productCart = $cart->where('id', $request->id)->first();

        if (empty($productCart)) {
            return false;
        }
        Cart::remove($productCart->rowId);
        
        return redirect()->back();
        
    }

    public function removeCart()
    {
        return Cart::destroy();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Index the cart added products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = $this->getIdsProductsAdded($this->getCart());
        $cartQuery = DB::table('info_products')->whereIn('variant_id', $ids)->get();

        return view('store.cart', compact('cartQuery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
