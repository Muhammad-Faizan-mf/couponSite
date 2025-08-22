<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index(){
        $recentBlogs = Blog::latest()->limit(30)->get();

        return view('site.blogs',compact('recentBlogs'));
    }

    public function promoCodes(){

 $coupons = Coupon::with('brand')
    ->whereNotNull('coupon_code')
    ->orderBy('priority', 'asc')
    ->get();

        return view('site.promoCode',compact('coupons'));
    }
    public function categories(){
        $categories = Category::with('brands')->get();

        return view('site.categories',compact('categories'));
    }
}
