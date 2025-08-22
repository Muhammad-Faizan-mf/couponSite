<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(): View
    {
        $faqs = Faq::latest()->paginate(5);

        return view('faq.index',compact('faqs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = Category::get();
        $brands= Brand::get();
        return view('faq.create',compact('category','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            // 'category_id' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/faqs/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }

        // dd($input);
        Faq::create($input);


        return redirect()->route('faqs.index')
                         ->with('success', 'Faq created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        // $faqs = Faq::with('category')->get();
        // $faq->load('category');
        // return json_encode($faq);

        return view('faq.show',
        compact('faq')
    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq): View
    {
        $category = Category::get();
                $brands= Brand::get();

        return view('faq.edit', compact('faq','category','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
{
    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string',
        'brand_id' =>'required',
    ]);

    $faq->update([
        'question' => $request->question,
        'answer' => $request->answer,
        'brand_id' =>$request->brand_id,
    ]);

    return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()->route('faqs.index')
                         ->with('success', 'Faq deleted successfully');
    }


 public function upload(Request $request)
{
    if ($request->hasFile('upload')) {
        $file     = $request->file('upload');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads/faqs'), $filename);

        return response()->json([
            "url" => asset('uploads/faqs/'.$filename)
        ]);
    }

    return response()->json(['error' => 'No file uploaded'], 400);
}





}
