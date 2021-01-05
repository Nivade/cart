<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return View('shop.index', ['products' => $products]);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        Session::put('cart', $cart);

        return redirect()->route('shop.index');
    }

    public function cart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $shipping = Shipping::ShippingCostsForWeight($cart->weight);

        return View('shop.shopping-cart', ['products' => $cart->items, 'shipping' => $shipping, 'totalPrice' => $cart->total + $shipping]);
    }
}
