<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index(){

    }

    public function byCategory($id){

         $stores = Brand::where('category_id',$id)
        ->get();
          $storesCount = Brand::where('category_id',$id)
        ->count();




        // dd($store,$topBrands);
        return view('site.allStore',compact('stores','storesCount'));

    }

    public function allCategory(){


        $categories = DB::table('category as c')
    ->leftJoin('brands as b', 'b.category_id', '=', 'c.id')
    ->leftJoin('coupons as cp', 'cp.brand_id', '=', 'b.id')
    ->select(
        'c.id',
        'c.name',
        DB::raw('COUNT(DISTINCT b.id) as brand_count'),
        DB::raw('COUNT(DISTINCT cp.id) as coupon_count')
    )
    ->groupBy('c.id', 'c.name')
    ->orderBy('c.name')
    ->get();

    return view('site.allCategory',compact('categories'));
    }
}
