<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //
    public function getcart()
    {
        return view('page.cart');
    }

    public function getAdd(Request $request, $id)
    {
        $id = $request->id;
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "price" => $product->attribute->first()->price_sale,
                    "photo" => $product->image->first()->path
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => $request->quantity,
            "price" => $product->attribute->first()->price_sale,
            "photo" => $product->image->first()->path
        ];

        session()->put('cart', $cart);
        session()->flash('success', 'Product added to cart successfully');
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function updatecart(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }


    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }


    }
}
