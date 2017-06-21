<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Front_Camera;
use App\Back_Camera;
use Auth;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $datas = Product::all();
        return view('products.show_new_product')->with('data', $datas);
    }
}