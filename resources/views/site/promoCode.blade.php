
@extends('site.layout')

@section('content')




<section class="py-12 px-4 md:px-8 bg-white"
    x-data="{
        open: false,
        couponName: '',
        couponDetail: '',
        couponCode: '',
        couponUrl: ''
    }"
>
    <div
        x-show="open"
        x-cloak
        x-transition.opacity.duration.300ms
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 p-4"
        @click.self="open = false"
    >
        <div
            x-transition.scale.duration.300ms
            class="bg-white rounded-xl shadow-2xl w-full max-w-lg p-6 relative border-t-4 border-green-600"
        >
            <!-- Close button -->
            <button
                @click="open = false"
                class="absolute top-3 right-3 text-gray-500 hover:text-green-600 text-2xl leading-none"
            >
                &times;
            </button>

            <!-- Modal content -->
            <h2 class="text-2xl font-bold text-gray-900 mb-1" x-text="couponName"></h2>
            <p class="text-sm text-gray-600 mb-4" x-text="couponDetail"></p>

            <!-- If URL exists -->
            <template x-if="couponUrl">
                <div>
                    <div class="bg-green-50 p-3 rounded-md mb-4 border border-green-200">
                        <p class="text-xs font-mono text-green-600 break-words" x-text="couponUrl"></p>
                    </div>
                    <a :href="couponUrl" target="_blank" rel="noopener noreferrer"
                       class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition text-center block font-medium">
                        Open Link
                    </a>
                </div>
            </template>

            <!-- If URL is empty, show Coupon Code -->
            <template x-if="couponCode">
                <div class="bg-green-50 border border-green-200 p-4 rounded-md text-center font-mono text-lg tracking-wide mb-4 flex items-center justify-between">
                    <span class="text-green-600 font-bold" x-text="couponCode"></span>
                    <button
                        @click="
                            navigator.clipboard.writeText(couponCode);
                            $event.target.innerText = 'Copied!';
                            setTimeout(() => $event.target.innerText = 'Copy', 1500);
                        "
                        class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded text-sm font-medium text-white"
                    >
                        Copy
                    </button>
                </div>
            </template>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($coupons as $coupon)
            <div
    class="border border-gray-200 rounded-lg shadow-sm p-5 bg-white hover:shadow-lg transition cursor-pointer"
    @click="
        couponName = '{{ $coupon->name }}';
        couponDetail = '{{ $coupon->detail }}';
        couponCode = '{{ $coupon->coupon_code }}';
        window.open('{{ $coupon->url }}', '_blank');
        navigator.clipboard.writeText(couponCode);
        open = true;

    "
>
                <div class="flex items-center space-x-3 mb-3">
                        <img src="{{ asset('images/brands/'.$coupon->brand->image) }}" alt="{{ $coupon->brand->name }}"
                            class="h-8 w-8 object-contain">
                        <div>
                            <p class="text-sm font-semibold text-gray-800">{{ $coupon->brand->name }}</p>
                            <p class="text-xs text-green-600 font-medium">✔ {{$coupon->state}}</p>
                        </div>
                </div>
                <h3 class="text-base font-semibold text-gray-800 mb-2">{{ $coupon->name }}</h3>
                <p class="text-sm text-gray-600 mb-4">{{ $coupon->detail }}</p>
                <div class="flex justify-between items-center">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-600 transition">
                        Copy Code
                    </button>
                    <div class="text-xs text-gray-500 flex items-center space-x-1">
                        <span>✔ 3565 uses</span>
                        <span>•</span>
                        <span>Last used 19m ago</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>



@endsection




