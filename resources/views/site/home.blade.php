
@extends('site.layout')

@section('content')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>


    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-white to-green-100 py-12 px-4 md:px-12">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 space-y-4">
                <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                    SAVE BIG WITH EXCLUSIVE <br>
                    <span class="text-green-600">COUPON CODES & DISCOUNTS</span>
                </h1>
                <p class="text-gray-700 text-lg">
                    Get the latest verified deals from top brands to save instantly!
                </p>
               <a href="#top-deals"
   class="inline-block bg-green-500 text-black px-6 py-2 rounded-full text-sm font-medium mt-2">
   Browse Top Deals ↓
</a>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0">
                <!-- Replace this with your slider or image -->
                <div class="w-full bg-white shadow p-6 rounded-lg">
                    <p class="text-gray-700 font-medium">Sample Featured Deal: Nike - 30% OFF Running Shoes</p>
                    <button class="bg-green-500 text-white px-4 py-1 rounded-full mt-4 text-sm">Copy Code</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Codes and Deals Section -->
 <!-- Include Alpine.js -->
<!-- Alpine.js (place in head or before </body>) -->
<script src="https://unpkg.com/alpinejs" defer></script>
<section class="py-12 px-4 md:px-12">
    <div class="max-w-7xl mx-auto">
      <!-- Header -->
      <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 space-y-4 sm:space-y-0">
        <h2 class="text-2xl font-bold text-black">
          Promo Codes And Deals - They Really Work!
        </h2>
        <a href="/all-stores" class="text-green-600 text-sm font-medium hover:underline">
          View All Stores
        </a>
      </div>

      <!-- Slider Container -->
      <div class="relative">
        <!-- Mobile/Tablet Slider -->
        <div
          id="logoSlider"
          class="flex gap-6 overflow-x-auto whitespace-nowrap scroll-smooth md:hidden"
          style="scrollbar-width: none; -ms-overflow-style: none;"
        >
          <style>
            /* Hide scrollbar for all browsers */
            #logoSlider::-webkit-scrollbar {
              display: none;
            }
          </style>

          <!-- Brand Logos -->
          @foreach ($topBrands as $topBrand)
            <div class="shrink-0 w-28 flex justify-center items-center">
                <a href="/store/{{$topBrand->id}}/{{ Str::slug($topBrand->name) }}">
                    {{-- @dd($topBrand->name) --}}
              <img
                src="{{ asset('images/brands/' . $topBrand->image) }}"
                alt="{{ $topBrand->name ?? 'Brand Logo' }}"
                class="h-10 object-contain max-w-full"
              >
              </a>
            </div>
          @endforeach
        </div>

        <!-- Desktop Grid (11 Columns) -->
        <div class="hidden md:grid grid-cols-11 gap-6">
          @foreach ($topBrands as $topBrand)

          <div class="flex justify-center items-center">
            <a href="/store/{{$topBrand->id}}/{{ Str::slug($topBrand->name) }}">
              <img
                src="{{ asset('images/brands/' . $topBrand->image) }}"
                alt="{{ $topBrand->name ?? 'Brand Logo' }}"
                class="h-10 object-contain max-w-full"
              >
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>


  <!-- Auto-scroll JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const slider = document.getElementById('logoSlider');

      if (!slider) return;

      let scrollSpeed = 1; // pixels per frame
      let intervalTime = 20;
      let maxScrollLeft;

      function updateMaxScroll() {
        maxScrollLeft = slider.scrollWidth - slider.clientWidth;
      }

      function autoScroll() {
        if (slider.scrollLeft >= maxScrollLeft) {
          slider.scrollLeft = 0;
        } else {
          slider.scrollLeft += scrollSpeed;
        }
      }

      updateMaxScroll();
      let scrollInterval = setInterval(autoScroll, intervalTime);
      window.addEventListener('resize', updateMaxScroll);
    });
  </script>

<div id="top-deals" class="container mx-auto px-4 py-6"
     x-data="{ selectedCategory: 'All Deals', open: false, couponName: '', couponDetail: '', couponCode: '', couponUrl: '' }">

    <h2 class="text-2xl font-bold mb-4">Our Top Coupon Codes, Discounts and Deals</h2>

    {{-- Category Filter --}}
    <div class="flex flex-wrap gap-3 mb-6">
        <button
            class="px-4 py-2 rounded-full border"
            :class="selectedCategory === 'All Deals' ? 'bg-green-500 text-white' : 'bg-white text-black hover:bg-green-500 hover:text-white transition'"
            @click="selectedCategory = 'All Deals'">
            All Deals
        </button>

        @foreach($categories->take(4) as $category)
            <button
                class="px-4 py-2 rounded-full border"
                :class="selectedCategory === '{{ $category->name }}' ? 'bg-green-500 text-white' : 'bg-white text-black hover:bg-green-500 hover:text-white transition'"
                @click="selectedCategory = '{{ $category->name }}'">
                {{ $category->name }}
            </button>
        @endforeach

        <a href="/all-stores" class="ml-auto text-green-600 font-semibold hover:underline">View All Deals</a>
    </div>

    {{-- Deals Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($coupons as $coupon)
            @php
                $brandCategory = optional(optional($coupon->brand)->category)->name;
            @endphp

            <div
                class="bg-white shadow-lg rounded-xl p-5 border border-gray-200 cursor-pointer hover:shadow-xl transition"
                x-data='{ cat: @json($brandCategory) }'
                x-show="selectedCategory === 'All Deals' || selectedCategory === cat"
                x-transition
                @click="
                    couponName = '{{ $coupon->name }}';
                    couponDetail = '{{ $coupon->detail }}';
                    couponCode = '{{ $coupon->coupon_code }}';
                    couponUrl = '{{ $coupon->url }}';
                            window.open('{{ $coupon->url }}', '_blank');

                    open = true;
                    navigator.clipboard.writeText(couponCode);
                "
            >
                <div class="flex items-center gap-2 mb-2">
                        <span class="text-2xl">
                            <img
                                src="{{ asset('images/brands/' . ($coupon->brand->image ?? 'default.png')) }}"
                                alt="{{ $coupon->brand->name ?? 'Brand Logo' }}"
                                class="h-10 object-contain max-w-full"
                            >
                        </span>
                        <h3 class="font-bold text-lg">{{ $coupon->brand?->name ?? 'No Brand' }}</h3>

                        <span class="text-blue-500 text-sm">✔ {{ $coupon->state }}</span>
                </div>

                <h4 class="text-md font-semibold mb-1">{{ $coupon->name }}</h4>
                <p class="text-gray-600 text-sm mb-4">{{ \Illuminate\Support\Str::limit($coupon->detail, 80) }}</p>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-600 transition">
                        Copy Code
                    </button>
                    <div class="text-xs text-gray-500 flex items-center gap-1">
                        ✔ {{ $coupon->uses ?? 0 }} uses – Last used {{ $coupon->last_used ?? 'Recently' }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Coupon Modal --}}
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

            <template x-if="couponUrl">
                {{-- <a :href="couponUrl" target="_blank" rel="noopener noreferrer"
                   class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition text-center block font-medium">
                    Open Link
                </a> --}}
            </template>
        </div>
    </div>
</div>



<div class="container mx-auto px-4 py-8 space-y-6">

    {{-- Top Section: Why Choose Us & How It Works --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Why Choose Us --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border">
            <h2 class="text-xl font-semibold mb-4">Why Choose Us</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 text-gray-800">
                <div class="flex items-start gap-2">
                    <span class="text-green-500 text-lg">✔️</span>
                    <p>Daily Updated Coupons & Deals</p>
                </div>
                <div class="flex items-start gap-2">
                    <span class="text-green-500 text-lg">✔️</span>
                    <p>Verified & Working Promo Codes</p>
                </div>
                <div class="flex items-start gap-2">
                    <span class="text-green-500 text-lg">✔️</span>
                    <p>Exclusive Offers from Top Brands</p>
                </div>
                <div class="flex items-start gap-2">
                    <span class="text-green-500 text-lg">✔️</span>
                    <p>100% Free to Use – No Registration Required</p>
                </div>
            </div>
        </div>

        {{-- How it Works --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border">
            <h2 class="text-xl font-semibold mb-2">How it Works</h2>
            <p class="text-sm text-gray-700 mb-4">
                <a href="#" class="text-green-600 font-medium hover:underline">CaptainDiscounts.com</a> is your trusted destination
                for the latest and most reliable coupon codes, promo deals, and discounts from thousands of popular retailers.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-3 text-center mt-4 gap-4">
                <div>
                    <div class="text-green-600 text-2xl mb-1">🔍</div>
                    <h3 class="font-semibold text-black">Search</h3>
                    <p class="text-sm text-gray-500">Browse your favorite store/category</p>
                </div>
                <div>
                    <div class="text-green-600 text-2xl mb-1">📋</div>
                    <h3 class="font-semibold text-black">Copy the Code</h3>
                    <p class="text-sm text-gray-500">Click and copy</p>
                </div>
                <div>
                    <div class="text-green-600 text-2xl mb-1">🏷️</div>
                    <h3 class="font-semibold text-black">Shop & Save</h3>
                    <p class="text-sm text-gray-500">Apply at checkout</p>
                </div>
            </div>
        </div>
    </div>

    {{-- What Are Coupon Codes --}}
    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <h2 class="text-xl font-semibold mb-3">What Are Coupon Codes?</h2>
        <p class="text-sm text-gray-700 leading-relaxed">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged.
        </p>
    </div>
</div>

<div class="bg-white py-10 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">

    {{-- Header and Button --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h2 class="text-lg font-medium text-gray-700 mb-4 md:mb-0">
            Everything you need to know about using <span class="text-black font-semibold">CaptainDiscounts</span>
        </h2>
        {{-- <a href="#" class="inline-flex items-center px-5 py-2.5 bg-green-600 text-white font-semibold text-sm rounded-full hover:bg-green-700 transition">
            Start For Free Now <span class="ml-2">→</span>
        </a> --}}
    </div>

    {{-- FAQ Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" x-data="{ open: 0 }">
        @php
            $faqs = [
                [
                    'question' => 'What is CaptainDiscounts.com?',
                    'answer' => 'CaptainDiscounts.com is your premier destination for finding the best deals, coupons, and discounts across thousands of online retailers. We curate and verify deals daily to ensure you get the best savings possible.',
                ],
                [
                    'question' => 'Are coupons always valid?',
                    'answer' => 'We work hard to keep coupons up-to-date, but validity depends on the retailer’s expiration policy.',
                ],
                [
                    'question' => 'How do I use a coupon code?',
                    'answer' => 'Simply copy the code and paste it at the retailer’s checkout page before making payment.',
                ],
                [
                    'question' => 'Do I need to sign up?',
                    'answer' => 'No registration is required. You can access and use all codes for free.',
                ],
                [
                    'question' => 'How to find best deals?',
                    'answer' => 'Use our search feature or browse categories. Filter by store or popularity for best results.',
                ],
            ];
        @endphp

        @foreach($faqs as $index => $faq)
        <div class="border rounded-md overflow-hidden" :class="open === {{ $index }} ? 'bg-green-50' : 'bg-white'">
            <button @click="open === {{ $index }} ? open = null : open = {{ $index }}" class="w-full px-4 py-3 text-left font-medium text-gray-900 flex justify-between items-center">
                <span>{{ $faq['question'] }}</span>
                <svg :class="open === {{ $index }} ? 'transform rotate-180 text-green-600' : 'text-gray-400'" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div x-show="open === {{ $index }}" x-collapse class="px-4 pb-4 text-sm text-gray-700 leading-relaxed">
                {{ $faq['answer'] }}
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection




