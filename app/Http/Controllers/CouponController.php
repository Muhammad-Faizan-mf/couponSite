<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Coupon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(): View
    {
        $coupons = Coupon::latest()->paginate(10);

        return view('coupon.index',compact('coupons'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $brand= Brand::get();
        return view('coupon.create',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'url' => 'required',
            'type' => 'required',
            'state' => 'required',
            'priority' => 'required',
            'startDate' => 'required',
            // 'endDate' => 'required',
            'brand_id' => 'required',
            'discount' => 'required',

        ]);

        $input = $request->all();



        Coupon::create($input);

        return redirect()->route('coupons.index')
                         ->with('success', 'Coupon created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon): View
    {
        return view('coupon.show', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon): View
    {
        $brands = Brand::get();
        return view('coupon.edit', compact('coupon','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'url' => 'required',
            'type' => 'required',
            'state' => 'required',
            'priority' => 'required',
            'startDate' => 'required',
            // 'endDate' => 'required',
            'brand_id' => 'required',
            'discount' => 'required',
        ]);

        $input = $request->all();



        $coupon->update($input);

        return redirect()->route('coupons.index')
                         ->with('success', 'Coupon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon): RedirectResponse
    {
        $coupon->delete();

        return redirect()->route('coupons.index')
                         ->with('success', 'Coupon deleted successfully');
    }
}
