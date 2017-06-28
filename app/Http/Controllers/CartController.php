<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Session;

class CartController extends Controller
{
    public function index ()
    {
        if ($stt = 0) {
            return view('cart'); 
        } 
        else {
            $products = Product::all();
            $content = Cart::content();
            $total = Cart::total();
            $qty = Cart::count();
            $qtysp = Cart::content()->count();
            $subtotal = Cart::subtotal();
            return view('pages.cart', compact('qtysp'), compact('subtotal'))->with('products', $products)
                ->with('content', $content)->with('total', $total)->with('qty', $qty);     
        }      
    }

     public function getAddtoCart ($id)
     {
            $stt = 1;
            $product = Product::find($id);
            $insert = Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => 1,
             'price' => $product->price, 'image' =>  $product->image]);
            return redirect()->route('home');
    }

    public function getCheckout ()
    {
        $products = Product::all();
        $content = Cart::content();
        $total = Cart::total();
        $qty = Cart::count();
        $qtysp = Cart::content()->count();
        $subtotal = Cart::subtotal();
        return view('home', compact('content'), compact('products'), compact('qtysp'), compact('subtotal'))
        ->with('total', $total)->with('qty', $qty);
    }

    public function getUpdateQtyCart ($id)
    {
        $rowid = Cart::content()->where('id', $id)->pluck('rowId')->first();
        $qty = Cart::content()->where('id', $id)->pluck('qty')->first();
        Cart::update($rowid, $qty+1);
        // $total=Cart::total();
        return redirect()->back();
    }

    public function getDeleteQtyCart ($id)
    {
        $rowid = Cart::content()->where('id', $id)->pluck('rowId')->first();
        $qty = Cart::content()->where('id', $id)->pluck('qty')->first();
        Cart::update($rowid, $qty-1);
        // $total=Cart::total();
        return redirect()->back();
    }

    public function getDeleteProductCart ($id)
    {
        $rowid = Cart::content()->where('id', $id)->pluck('rowId')->first();
        Cart::remove($rowid);
        return redirect()->back();
    }

    public function getDeleteCart()
    {
        $content = Cart::content()->pluck('rowId');
        foreach ($content as $item) {
            Cart::remove($item);
        }
        return redirect()->back();
    }

    public function getUpdateCart ($id)
    {
        // $qty=Input::get('qty');
        // dd($qty);
        echo "đang hoàn thiện";
    }
}
