<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class ProductController extends Controller
{
    public function index() {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('product.index')->with('products', $products);
    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product.show')->with('product', $product);
    }

    public function getAddToCart(Request $request, $id) {
    
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('home');
    }

    public function getCart() {
        if(!Session::has('cart')) {
            return view('product.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('product.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
