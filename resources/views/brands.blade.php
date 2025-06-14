


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

    <section class="py-12 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8">

            {{-- Sidebar --}}
            <aside class="lg:w-1/4 w-full space-y-6 bg-[#f7fdf7] p-6 rounded-xl shadow-sm">
                <div class="text-center">
                    <img src="{{ asset('images/logos/amazon.png') }}" alt="Amazon" class="mx-auto h-16 object-contain">
                </div>
                <div class="text-sm text-gray-600">
                    <p>When you buy through links on <strong>Captain Discount</strong>, we may earn a commission.</p>
                </div>

                <div>
                    <h3 class="text-base font-semibold text-gray-800 mb-2">TODAY'S TOP AMAZON OFFERS:</h3>
                    <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                        <li>2% Cash Back for Purchases Sitewide</li>
                        <li>Experience hassle-free journeys with Amazon, your reliable travel partner.</li>
                    </ul>
                    <div class="mt-3 text-sm">
                        <p><strong>Total Offers:</strong> 6</p>
                        <p><strong>Coupon Codes:</strong> 1</p>
                        <p><strong>In-Store Coupons:</strong> 0</p>
                        <p><strong>Free Shipping Deals:</strong> 0</p>
                    </div>
                </div>

                <div>
                    <h4 class="text-base font-semibold text-gray-800">ABOUT THE STORE</h4>
                    <p class="text-sm text-gray-700 mt-2">Enjoy incredible savings with our limited-time discounts, exclusively on our Amazon store. Don't miss out—these offers won’t last forever.</p>
                    <a href="#" class="text-green-600 text-sm font-medium mt-2 inline-block">Learn How We Verify Coupons</a>
                </div>

                <div class="text-green-600 font-medium text-sm">
                    <a href="#" class="underline">SUBMIT A COUPON</a>
                </div>

                <div>
                    <p class="text-sm font-semibold text-gray-800">ABOUT AMAZON</p>
                    <div class="flex items-center mt-1">
                        <span class="text-yellow-500 text-lg">★★★★★</span>
                        <span class="ml-2 text-sm text-gray-600">Rate Amazon Offers</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="inline-block bg-green-600 text-white px-6 py-2 rounded-full font-semibold text-sm hover:bg-green-700 transition">LOGIN</a>
                </div>
            </aside>

            {{-- Main Content --}}
            <main class="lg:w-3/4 w-full">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Amazon Coupons & Promo Codes</h1>
                    <p class="text-sm text-gray-500 mt-1">Latest Discount for April 2025</p>
                </div>

                {{-- Coupon Cards Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="border border-gray-200 rounded-lg shadow-sm p-5 bg-white hover:shadow-md transition">
                            <div class="flex items-center space-x-3 mb-3">
                                <img src="{{ asset('images/logos/amazon.png') }}" alt="Amazon" class="h-8 w-8 object-contain">
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Amazon</p>
                                    <p class="text-xs text-green-600 font-medium">✔ Verified coupon</p>
                                </div>
                            </div>
                            <h3 class="text-base font-semibold text-gray-800 mb-2">Get 50% OFF on Electronic</h3>
                            <p class="text-sm text-gray-600 mb-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="flex justify-between items-center">
                                <button class="bg-green-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-600 transition">
                                    Copy Code
                                </button>
                                <div class="text-xs text-gray-500 flex items-center space-x-1">
                                    <span>✔ 3565 uses</span>
                                    <span>•</span>
                                    <span>Last used 19m ago</span>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </main>

        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 md:px-8 py-10">
        <div class="overflow-x-auto bg-white rounded-xl shadow-md">
            <table class="min-w-full text-left border-collapse">
                <thead>
                    <tr class="bg-green-500 text-white text-sm uppercase tracking-wider">
                        <th class="px-6 py-4">Discount</th>
                        <th class="px-6 py-4">Description</th>
                        <th class="px-6 py-4">Expiration Date</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 font-medium">20% Off</td>
                        <td class="px-6 py-4">Get 20% Off Using Promo Code</td>
                        <td class="px-6 py-4">-</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium">20% Off</td>
                        <td class="px-6 py-4">Save 20% Off Sitewide with Promo Code</td>
                        <td class="px-6 py-4">-</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium">15% Off</td>
                        <td class="px-6 py-4">G Fuel Deals: 15% Off Your Shopping Cart</td>
                        <td class="px-6 py-4">-</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium">20% Off</td>
                        <td class="px-6 py-4">G Fuel Coupon: Up to 20% Off Your Purchase</td>
                        <td class="px-6 py-4">-</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium">20% Off</td>
                        <td class="px-6 py-4">G Fuel Coupon: 20% Off Your Order</td>
                        <td class="px-6 py-4">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="bg-white px-4 py-10 sm:px-6 lg:px-8 max-w-5xl mx-auto rounded-xl shadow-md">
        <h2 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-4">
            Store Frequently Ask Questions
        </h2>
        <p class="text-gray-700 text-sm sm:text-base mb-6 leading-relaxed">
            At Captain Discounts, we're committed to helping you save smartly. Our team tirelessly researches and verifies the latest coupon codes and deals from the most popular online stores, so you don’t have to waste time hunting for savings that don’t work. Transparency, accuracy, and real value are at the core of everything we do. We partner with trusted brands and only list offers we’d use ourselves—because your trust is our top priority. When you visit Captain Discounts, you can shop with confidence, knowing you're getting the best, most up-to-date deals available.
        </p>

        <div class="space-y-6 text-gray-800">
            <div>
                <h3 class="font-semibold text-base sm:text-lg">What is CaptainDiscounts.com?</h3>
                <p class="text-sm sm:text-base mt-1">
                    CaptainDiscounts.com is a leading coupon and deals website that helps shoppers save money with verified coupon codes, promo codes, and discounts from thousands of popular online retailers and brands. Our mission is to make saving money easy and accessible for everyone.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-base sm:text-lg">How do I use a coupon code?</h3>
                <p class="text-sm sm:text-base mt-1">
                    Using a coupon code is simple: Just click on the 'Get Code' button next to the coupon you want to use. The code will be revealed and automatically copied to your clipboard. We'll then redirect you to the retailer's website where you can paste the code at checkout in the designated promo code or coupon code field.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-base sm:text-lg">Are these coupons always valid?</h3>
                <p class="text-sm sm:text-base mt-1">
                    We strive to maintain the most accurate and up-to-date coupon database possible. Our team regularly verifies coupon codes and removes expired offers. However, retailers may change or invalidate codes without notice. If you find an invalid code, please let us know, and we'll update our database promptly.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-base sm:text-lg">Do I need to sign up to get coupons?</h3>
                <p class="text-sm sm:text-base mt-1">
                    No, CaptainDiscounts.com is completely free to use and doesn't require registration to access our coupon codes. However, creating a free account allows you to save your favorite stores, get personalized deal alerts, and track your savings over time.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-base sm:text-lg">How can I find the best deals?</h3>
                <p class="text-sm sm:text-base mt-1">
                    The best way to find deals is to search for your favorite store in our search bar or browse our categories. Sort results by popularity, value, or newest to find the best deals. For maximum savings, check our blog for money-saving tips and strategies for combining offers. You can also sign up for our newsletter to get the best deals delivered to your inbox.
                </p>
            </div>
        </div>
    </section>
    <section class="py-8 px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Popular Stores</h2>
            <a href="" class="text-green-600 font-semibold hover:underline">View All Stores</a>
        </div>

        <div class="grid grid-cols-3 gap-6 md:grid-cols-6">
            <a href="" class="flex justify-center items-center">
                <img src="{{ asset('images/ebay-logo.png') }}" alt="eBay" class="h-10">
            </a>
            <a href="" class="flex justify-center items-center">
                <img src="{{ asset('images/walmart-logo.png') }}" alt="Walmart" class="h-10">
            </a>
            <a href="" class="flex justify-center items-center">
                <img src="{{ asset('images/levis-logo.png') }}" alt="Levi's" class="h-10">
            </a>
            <!-- Add more stores as needed -->
        </div>
    </section>


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



</body>
</html>
