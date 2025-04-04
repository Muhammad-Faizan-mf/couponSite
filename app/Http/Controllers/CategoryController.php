<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(Request $request)
    {

        $category = Category::orderBy('id', 'DESC')->get();

        return view('category.category', compact('category'));
    }

    public function create()

    {

        return view('category.create');

    }

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',



        ]);



        Category::create($request->all());
        $category = Category::orderBy('id', 'DESC')->get();

        // return view('category.category', compact('category'));


        return redirect()->route('category.index')

                        ->with('success','Product created successfully.');

    }

    public function index(Request $request)
    {
        // dd('ds');
        $category = Category::latest()->paginate(10);


        return view('category.category', compact('category'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function show(Category $category)

    {
        // dd($category->name);

        return view('category.show',compact('category'));

    }


    public function destroy(Category $category)

    {

        $category->delete();



        return redirect()->back();

    }
    public function edit(Category $category)

    {

        return view('category.edit',compact('category'));

    }



    public function update(Request $request, Category $category)

    {

        $request->validate([

            'name' => 'required',



        ]);


        // dd($category);
        $category->update($request->all());



        return redirect()->route('category.index')

                        ->with('success','Product updated successfully');

    }
}
