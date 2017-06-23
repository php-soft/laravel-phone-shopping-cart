<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Front_Camera;
use App\Back_Camera;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();
        return view('home')->with('data', $datas);
    }
}
