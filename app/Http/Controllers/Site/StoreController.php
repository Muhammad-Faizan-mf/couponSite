<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Http\Request;

class   StoreController extends Controller
{
    public function index(){

        $topBrands = Brand::withCount('coupons')
        ->orderBy('coupons_count', 'desc')
        ->take(11)
        ->get();

        $recentBlogs = Blog::latest()->limit(3)->get();
        $topCoupons = Coupon::latest()->limit(12)->get();
        $categories  = Category::get();



        return view('site.store',compact('topBrands','recentBlogs','topCoupons','categories'));
    }

    public function storeView($id){
        $store = Brand::where('id',$id)
        ->first();
         $topBrands = Brand::withCount('coupons')
        ->orderBy('coupons_count', 'desc')
        ->take(11)
        ->get();
        $coupons = Coupon::where('brand_id', $id)->get();
        // dd($coupons);

        // dd($store,$topBrands);
        return view('site.store',compact('store','topBrands','coupons'));
    }


    public function allStores(){
        $stores = Brand::all();
        return view('site.allStore',compact('stores'));
    }
}
