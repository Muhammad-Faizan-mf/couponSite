


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Captain Discounts')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN (or use Laravel Mix/Vite if preferred) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="bg-white text-black font-sans">

    <nav class="w-full bg-black text-white px-4 md:px-12 py-4 flex justify-between items-center">
        <div class="text-white text-xl font-bold">
            {{-- <span class="text-sm font-light">captain</span>
            <span>discount<span class="text-green-500">$</span></span> --}}
            <img src="logo.png" alt="">
        </div>
        <ul class="hidden md:flex space-x-6 text-sm">
            <li><a href="#" class="hover:text-green-400">How it Works</a></li>
            <li><a href="#" class="hover:text-green-400">Promo Codes</a></li>
            <li><a href="#" class="hover:text-green-400">Categories</a></li>
            <li><a href="#" class="hover:text-green-400">Resources</a></li>
            <li><a href="#" class="hover:text-green-400">Blogs</a></li>
        </ul>
        <div class="hidden md:flex items-center space-x-4">
            <button class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
                </svg>
            </button>
            <a href="#" class="border border-green-500 text-green-500 px-4 py-1 rounded-full text-sm">Login</a>
            <a href="#" class="bg-green-500 text-black px-4 py-1 rounded-full text-sm">Get Coupons</a>
        </div>
        <button class="md:hidden">
            <!-- Hamburger icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

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
                <a href="#" class="inline-block bg-green-500 text-black px-6 py-2 rounded-full text-sm font-medium mt-2">
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
<section class="py-12 px-4 md:px-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-xl md:text-2xl font-bold text-black">
                Promo Codes And Deals - They Really Work!
            </h2>
            <a href="#" class="text-green-600 text-sm font-medium hover:underline">View All Stores</a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 items-center">
            <!-- Best Buy -->
            <div class="flex justify-center">
                <img src="{{ asset('images/logos/bestbuy.png') }}" alt="Best Buy" class="h-10 object-contain">
            </div>
            <!-- eBay -->
            <div class="flex justify-center">
                <img src="{{ asset('images/logos/ebay.png') }}" alt="eBay" class="h-10 object-contain">
            </div>
            <!-- Walmart -->
            <div class="flex justify-center">
                <img src="{{ asset('images/logos/walmart.png') }}" alt="Walmart" class="h-10 object-contain">
            </div>
            <!-- Levi's -->
            <div class="flex justify-center">
                <img src="{{ asset('images/logos/levis.png') }}" alt="Levis" class="h-10 object-contain">
            </div>
            <!-- Etsy -->
            <div class="flex justify-center">
                <img src="{{ asset('images/logos/etsy.png') }}" alt="Etsy" class="h-10 object-contain">
            </div>
            <!-- Placeholder or add more brands -->
            <div class="flex justify-center">
                <img src="{{ asset('images/logos/placeholder.png') }}" alt="More Brands" class="h-10 object-contain opacity-50">
            </div>
        </div>
    </div>
</section>
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Our Top Coupon Codes, Discounts and Deals</h2>

    {{-- Category Filter --}}
    <div class="flex flex-wrap gap-3 mb-6">
        @foreach(['All Deals', 'Fashion', 'Electronics', 'Travel', 'Food'] as $filter)
            <button class="px-4 py-2 rounded-full border @if($loop->first) bg-green-500 text-white @else bg-white text-black @endif hover:bg-green-500 hover:text-white transition">
                {{ $filter }}
            </button>
        @endforeach
        <a href="#" class="ml-auto text-green-600 font-semibold hover:underline">View All Deals</a>
    </div>

    {{-- Deals Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
            $coupons = [
                ['brand' => 'Apple', 'desc' => 'Mac Book', 'icon' => '🍎'],
                ['brand' => 'Levi\'s', 'desc' => 'Clothing', 'icon' => '👖'],
                ['brand' => 'Ebay', 'desc' => 'Kitchen Appliances', 'icon' => '🛒'],
                ['brand' => 'Amazon', 'desc' => 'Electronics', 'icon' => '📦'],
                ['brand' => 'Best Buy', 'desc' => 'Hardware', 'icon' => '🔧'],
                ['brand' => 'Adidas', 'desc' => 'Sports Wear', 'icon' => '👟'],
                ['brand' => 'Etsy', 'desc' => 'Art & Craft', 'icon' => '🎨'],
                ['brand' => 'Costco', 'desc' => 'Wholesale', 'icon' => '🏬'],
            ];
        @endphp

        @foreach($coupons as $coupon)
        <div class="bg-white shadow-lg rounded-xl p-5 border border-gray-200">
            <div class="flex items-center gap-2 mb-2">
                <span class="text-2xl">{{ $coupon['icon'] }}</span>
                <h3 class="font-bold text-lg">{{ $coupon['brand'] }}</h3>
                <span class="text-blue-500 text-sm">✔ Verified coupon</span>
            </div>
            <h4 class="text-md font-semibold mb-1">Get 50% OFF on {{ $coupon['desc'] }}</h4>
            <p class="text-gray-600 text-sm mb-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class="flex items-center justify-between">
                <button class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-600 transition">
                    Copy Code
                </button>
                <div class="text-xs text-gray-500 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 0a5 5 0 00-5 5v1H3a3 3 0 00-3 3v5a3 3 0 003 3h14a3 3 0 003-3v-5a3 3 0 00-3-3h-2V5a5 5 0 00-5-5zM5 5a5 5 0 0110 0v1H5V5z" /></svg>
                    356 uses – Last used 19m ago
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Trending Categories</h2>
        <a href="#" class="text-green-600 font-semibold hover:underline">View All Category</a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8 gap-4">
        @php
            $categories = [
                ['name' => 'Fashion', 'icon' => '👕', 'stores' => 34, 'coupons' => 120],
                ['name' => 'Tech', 'icon' => '💻', 'stores' => 28, 'coupons' => 95],
                ['name' => 'Travel', 'icon' => '✈️', 'stores' => 22, 'coupons' => 78],
                ['name' => 'Health', 'icon' => '🛡️', 'stores' => 22, 'coupons' => 78],
                ['name' => 'Sports', 'icon' => '🏃‍♂️', 'stores' => 22, 'coupons' => 78],
                ['name' => 'Furniture', 'icon' => '💡', 'stores' => 22, 'coupons' => 78],
                ['name' => 'Food', 'icon' => '🍽️', 'stores' => 22, 'coupons' => 78],
                ['name' => 'Watches', 'icon' => '⌚', 'stores' => 22, 'coupons' => 78],
                ['name' => 'Subscription', 'icon' => '📦', 'stores' => 18, 'coupons' => 45],
            ];
        @endphp

        @foreach($categories as $category)
        <div class="bg-white rounded-xl shadow border text-center p-4 hover:shadow-md transition">
            <div class="text-3xl text-green-500 mb-2">{{ $category['icon'] }}</div>
            <h3 class="font-semibold text-black text-lg">{{ $category['name'] }}</h3>
            <p class="text-sm text-gray-500 mt-1">{{ $category['stores'] }} Stores | {{ $category['coupons'] }} Coupons</p>
        </div>
        @endforeach
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
        <a href="#" class="inline-flex items-center px-5 py-2.5 bg-green-600 text-white font-semibold text-sm rounded-full hover:bg-green-700 transition">
            Start For Free Now <span class="ml-2">→</span>
        </a>
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

<footer class="bg-black text-white text-sm">
    {{-- Top Footer --}}
    <div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between gap-8">

            {{-- Logo & Copyright --}}
            <div>
                <div class="text-3xl font-bold text-white">
                    captain <span class="text-green-500">discount<span class="inline-block bg-green-500 text-black rounded-full px-1">$</span></span>
                </div>
                <p class="mt-4 text-gray-400">© 2025 Captain Discount. All rights reserved.</p>
            </div>

            {{-- Footer Columns --}}
            <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-4 flex-grow">

                {{-- Company --}}
                <div>
                    <h4 class="font-semibold mb-3">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                {{-- Resources --}}
                <div>
                    <h4 class="font-semibold mb-3">Resources</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Store Directory</a></li>
                        <li><a href="#">Categories</a></li>
                    </ul>
                </div>

                {{-- Legal --}}
                <div>
                    <h4 class="font-semibold mb-3">Legal</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>

                {{-- Social Links --}}
                <div>
                    <h4 class="font-semibold mb-3">Social Links</h4>
                    <div class="flex space-x-4 text-white text-lg">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Middle Disclaimer --}}
    <div class="bg-gray-800 py-4 text-center text-gray-300 px-6 text-xs">
        At CaptainDiscounts.com, we strive to bring you the best coupon codes, deals, reviews, and money-saving tips. When you use our links to make a purchase, we may earn a commission at no additional cost to you. This helps us maintain our free service for all users. We only promote products and services we genuinely believe will benefit our users, and we indicate when content includes affiliate links. Thank you for supporting CaptainDiscounts.com!
    </div>

    {{-- Bottom Green Bar --}}
    <div class="


</body>
</html>
