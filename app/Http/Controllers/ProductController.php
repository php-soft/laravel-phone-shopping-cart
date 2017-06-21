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
		$datas = DB::table('products')
    			 	->join('opera_systems', 'opera_systems.id', '=', 'products.opera_system_id')
    			 	->join('connects', 'connects.id', '=', 'products.connect_id')
    			 	->join('batteries', 'batteries.id', '=', 'products.battery_id')
    			 	->join('front_cameras', 'front_cameras.id', '=', 'products.front_camera_id')
    			 	->join('back_cameras', 'back_cameras.id', '=', 'products.back_camera_id')
    			 	->join('memories', 'memories.id', '=', 'products.memory_id')
    			 	->get();
    	// $opera_systems = Opera_System::with('products');
    	// $connects = Connect::with('products');
    	// $batteries = Battery::with('products');
    	// $front_cameras = Front_Camera::with('products');
    	// $back_cameras = Back_Camera::with('products');
    	// $memories = Memory::with('products');
        return view('products.show_new_product')->with('data', $datas);
    }
}
