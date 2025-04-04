<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captaindiscounts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

    <!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">

    <style>
        .slide-down {
            animation: slideDown 0.3s ease-in-out forwards;
        }
        .slide-up {
            animation: slideUp 0.3s ease-in-out forwards;
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideUp {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(-10px); }
        }
    </style>

</head>
<body class="bg-gray-100">
    <header class="bg-white p-4 shadow-md flex justify-between items-center w-full fixed top-0 left-0 z-50">
        <div class="flex items-center space-x-2">
            <a href="/">
            <img src="/logo.png" alt="Captaindiscounts Logo" class="w-8 h-8">
        </a>
        <span class="text-[#800080] text-xl font-bold">Captaindiscounts</span>
        </div>
        <div class="relative w-full md:w-1/3 mx-4">
            <input type="text" placeholder="Search for brands..." class="border p-2 rounded-full w-full pl-4 focus:outline-none">
            {{-- <button class="absolute right-2 top-1/2 transform-translate-y-1/2 bg-green-500 text-white rounded-full p-2">🔍</button> --}}
        </div>
        <nav class="hidden md:flex space-x-6">
            <a href="#" class="text-gray-600 hover:text-black">Promo Codes</a>
            <a href="#" class="text-gray-600 hover:text-black">Categories</a>
            <a href="#" class="text-gray-600 hover:text-black">Blog</a>
        </nav>
        <button class="md:hidden text-gray-600 focus:outline-none" id="menu-toggle">☰</button>
    </header>
    <div class="hidden bg-white p-4 shadow-md absolute top-16 left-0 w-full z-10" id="mobile-menu">
        <a href="#" class="block py-2 text-gray-600 hover:text-black">Promo Codes</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-black">Categories</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-black">Blog</a>
    </div>

    <section class="text-center py-20 mt-16">
        <h2 class="text-3xl font-bold mb-6">Top Cashbacks</h2>
        <div class="slider mx-auto w-full max-w-5xl flex justify-center">
            <div class="text-center w-48">
                <div class="w-40 h-40 rounded-full border flex items-center justify-center mx-auto">
                    <img src="/path-to-logo1.png" alt="Brand 1" class="w-32 h-32">
                </div>
                <span class="bg-[#800080] text-white text-lg px-4 py-2 rounded-full mt-2 inline-block">3% Cash Back</span>
            </div>
            <div class="text-center w-48">
                <div class="w-40 h-40 rounded-full border flex items-center justify-center mx-auto">
                    <img src="/path-to-logo2.png" alt="Brand 2" class="w-32 h-32">
                </div>
                <span class="bg-[#800080] text-white text-lg px-4 py-2 rounded-full mt-2 inline-block">1% Cash Back</span>
            </div>
            <div class="text-center w-48">
                <div class="w-40 h-40 rounded-full border flex items-center justify-center mx-auto">
                    <img src="/path-to-logo3.png" alt="Brand 3" class="w-32 h-32">
                </div>
                <span class="bg-[#800080] text-white text-lg px-4 py-2 rounded-full mt-2 inline-block">5% Cash Back</span>
            </div>
        </div>
    </section>

    <!-- Responsive Banner Section -->
<section class="w-full bg-[#800080] text-white text-center py-16 px-6 mt-1">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold">Exclusive Deals Just for You!</h2>
        <p class="mt-4 text-lg md:text-xl">Save big with our latest offers and top brands rewards.</p>
        <a href="#" class="mt-6 inline-block bg-white text-blue-600 font-semibold py-3 px-6 rounded-full text-lg hover:bg-gray-200 transition">Shop Now</a>
    </div>
</section>

<!-- Top Coupons and Promo Codes Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Top Coupons and Promo Codes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Coupon Card -->
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image1.jpg" alt="Coupon 1" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Nike</h3>
                    <p class="text-gray-700 text-sm mt-1">$30 Off Orders $150 + Free Shipping</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <!-- Coupon Card -->
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image2.jpg" alt="Coupon 2" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Canada Vet Express</h3>
                    <p class="text-gray-700 text-sm mt-1">20% Off Whole Purchase + Free Shipping</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: 2050-04-14</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <!-- Coupon Card -->
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image3.jpg" alt="Coupon 3" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Custom Frames Canada</h3>
                    <p class="text-gray-700 text-sm mt-1">70% OFF Storewide + Free Shipping</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: 2041-12-01</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <!-- Coupon Card -->
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image4.jpg" alt="Coupon 4" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">SideTrak</h3>
                    <p class="text-gray-700 text-sm mt-1">$50 OFF Swivel Portable Monitors</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: 2025-02-10</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <!-- Coupon Card -->
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image5.jpg" alt="Coupon 5" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Kremp Florist</h3>
                    <p class="text-gray-700 text-sm mt-1">10% OFF Entire Site</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: 2023-04-08</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <!-- Coupon Card -->
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="/path-to-image6.jpg" alt="Coupon 6" class="w-full h-40 object-cover rounded-md">
                <div class="mt-4">
                    <h3 class="text-blue-600 font-semibold">Goalsetter Basketball</h3>
                    <p class="text-gray-700 text-sm mt-1">Free Basketball On Goalsetter Basketball Hoop</p>
                    <p class="text-gray-500 text-xs mt-1">Expires: Soon</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Show Coupon Code</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center mb-8">Recent Blogs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/path-to-blog1.jpg" alt="Blog 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Why Does UV Protection Matter for Eyewear?</h3>
                    <p class="text-gray-600 text-sm">By: Isaac Armstrong</p>
                    <p class="text-gray-500 mt-2">Learn why UV protection in eyewear is important...</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">CONTINUE READING →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/path-to-blog2.jpg" alt="Blog 2" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">7 Common Bathing Mistakes to Avoid</h3>
                    <p class="text-gray-600 text-sm">By: Justice Stone</p>
                    <p class="text-gray-500 mt-2">Avoid 7 common bathing mistakes to protect your...</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">CONTINUE READING →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/path-to-blog3.jpg" alt="Blog 3" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">The Benefits of Investing in High-Quality Sportswear</h3>
                    <p class="text-gray-600 text-sm">By: Casper Robertson</p>
                    <p class="text-gray-500 mt-2">Upgrade your fitness gear with high-quality...</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">CONTINUE READING →</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <footer class="bg-gray-100 py-10 mt-10">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center md:text-left">
                <div>
                    <h3 class="text-2xl font-bold text-[#800080]">Captaindiscounts</h3>
                    <p class="text-gray-600 mt-2">Unlock the power of savings: your ultimate destination for exclusive coupons and discounts.</p>
                </div>
                <div>
                    <h4 class="font-semibold">Find Offers</h4>
                    <ul class="mt-2 space-y-1">
                        <li>Cash Backs</li>
                        <li>Blogs</li>
                        <li>Browse Stores</li>
                        <li>Browse Categories</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold">About us</h4>
                    <ul class="mt-2 space-y-1">
                        <li>Brands</li>
                        <li>Brands</li>
                        <li>Brands</li>
                        <li>Brands</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold">Connect with us</h4>
                    <p class="mt-2">Email: info@Captaindiscounts.com</p>
                    <div class="flex justify-center md:justify-start space-x-4 mt-4">
                        <span>📌</span>
                        <span>✖️</span>
                        <span>📷</span>
                        <span>▶️</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-6 text-sm text-gray-500">&copy; Copyright 2017-2025 <span class="text-[#800080] font-semibold">Captaindiscounts</span>. All Rights Reserved</div>
    </footer>

    <script>
        $(document).ready(function(){
            $('#menu-toggle').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });
        });
    </script>
</body>
</html>
