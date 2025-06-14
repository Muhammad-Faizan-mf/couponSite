
@extends('site.layout')

@section('content')


    <!-- Responsive Banner Section -->


<!-- Top Coupons and Promo Codes Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 mt-10">Top Coupons and Promo Codes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Coupon Card -->
            @foreach ($topCoupons as $topCoupon )

            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/images/brands/{{$topCoupon->brand->image ?? ''}}" alt="Coupon 1" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">{{$topCoupon->name}}</h3>
                    <p class="text-gray-700 text-sm mt-1">{{$topCoupon->detail}}</p>
                    <p class="text-gray-500 text-xs mt-1">{{$topCoupon->endDate}}</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            @endforeach

            <!-- Coupon Card -->

            <!-- Coupon Card -->

            <!-- Coupon Card -->


        </div>
    </div>
</section>



@endsection




