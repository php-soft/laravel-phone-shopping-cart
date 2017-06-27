<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\VoteProduct;
use App\PromotionProduct;
use App\Promotion;
use App\StoreProduct;
use App\Store;
use Auth;
use DB;

class ProductController extends Controller
{

    public function indexByID($slug)
    {
        $product_id = Product::where('slug', $slug)->pluck('id');
        $products=Product::find($product_id);
        $count=VoteProduct::where('product_id', $product_id)->count();
        $vote=VoteProduct::where('product_id', $product_id)->sum('vote_id');
        if ($count==0)
        {
            $avgvote=0;
        } else
        {
            $avgvote=(float)round($vote/$count);
        }
        $promotion_id=PromotionProduct::where('product_id', $product_id)->pluck('promotion_id');
        // echo '<pre>';print_r($promotion_id->toArray());
        $promotions=Promotion::find($promotion_id);
        $store_id=StoreProduct::where('product_id', $product_id)->pluck('store_id');
        $stores=Store::find($store_id);
        return view('products.detail')->with('products', $products)->with('count', $count)
        ->with('avgvote', $avgvote)->with('stores', $stores)->with('promotions', $promotions);
    }
}
