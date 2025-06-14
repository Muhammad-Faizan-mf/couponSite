<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Coupon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $topBrands = Brand::withCount('coupons')
        ->orderBy('coupons_count', 'desc')
        ->take(3)
        ->get();

        $recentBlogs = Blog::latest()->limit(3)->get();
        $topCoupons = Coupon::latest()->limit(12)->get();


        return view('site.home',compact('topBrands','recentBlogs','topCoupons'));
    }
}
