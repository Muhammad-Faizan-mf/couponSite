<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard(Request $request)
    {
        $cat_count= Category::count();
        $blog_count = Blog::count();
        $user_count = User::count();
        // brand_count
        // active_coupon_count
        // inactive_coupon_count
        return view('theme.dashboard',compact('cat_count','blog_count','user_count'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function users(Request $request)
    {
        $users = User::get();
        return view('user.users', compact('users'));
    }


}
