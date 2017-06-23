<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use DB;

class ProductController extends Controller
{
    public function indexByID($slug)
    {
        $product_id = Product::where('slug', $slug)->pluck('id');
        $product=Product::where('id', $product_id)->get();
        //dd($product);
        return view('products.detail')->with('product', $product);   
    }
}
