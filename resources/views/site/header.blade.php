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
    <nav class="bg-black text-white py-4 px-6 flex items-center justify-between flex-wrap">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <img src="/logo.png" alt="logo" class="inline-block h-[42px] w-[132px]  text-center">
            {{-- <span class="font-bold text-xl tracking-tight">
                captain <span class="text-lime-500">discount<span class="inline-block bg-lime-500 text-black rounded-full w-4 h-4 text-xs text-center">s</span></span>
            </span> --}}
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <div class="block lg:hidden">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-lime-500 border-lime-500 hover:text-white hover:border-white">
                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20"><path d="M0 3h20v2H0zM0 9h20v2H0zM0 15h20v2H0z" /></svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div id="nav-content" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block">
            <div class="text-sm lg:flex-grow lg:space-x-8 text-center lg:text-left">
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white">How it Works</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white">Promo Codes</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white">Categories</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white">Resources</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white">Blogs</a>
            </div>

            <!-- Right Buttons -->
            <div class="flex items-center space-x-4 mt-4 lg:mt-0">
                <button class="text-white hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <a href="#" class="px-4 py-2 border border-lime-500 text-lime-500 rounded-full hover:bg-lime-500 hover:text-black transition">Login</a>
                <a href="#" class="bg-lime-500 text-black px-4 py-2 rounded-full hover:bg-lime-600 transition">Get Coupons</a>
            </div>
        </div>
    </nav>

    <script>
        // Toggle mobile nav
        document.addEventListener("DOMContentLoaded", function () {
            const navToggle = document.getElementById('nav-toggle');
            const navContent = document.getElementById('nav-content');

            navToggle.addEventListener('click', function () {
                navContent.classList.toggle('hidden');
            });
        });
    </script>


        @yield('content')





        <footer class="bg-black text-white pt-12">
            <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
                <!-- Logo -->
                <div class="md:col-span-1 flex flex-col items-start">
                    <img src="logo.png" alt="logo" class="">
                    {{-- <h2 class="text-2xl font-bold mb-2">
                        captain <span class="text-lime-500">discount<span class="inline-block bg-lime-500 text-black rounded-full w-4 h-4 text-xs text-center">$</span></span>
                    </h2> --}}
                    <p class="text-sm text-gray-400 mt-2">© 2025 Captain Discount. All rights reserved.</p>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="font-semibold mb-2">Company</h3>
                    <ul class="space-y-1 text-gray-400">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="font-semibold mb-2">Resources</h3>
                    <ul class="space-y-1 text-gray-400">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Store Directory</a></li>
                        <li><a href="#">Categories</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="font-semibold mb-2">Legal</h3>
                    <ul class="space-y-1 text-gray-400">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div>
                    <h3 class="font-semibold mb-2">Social Links</h3>
                    <div class="flex space-x-4 mt-2 text-gray-300">
                        <a href="#"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#"><i class="fab fa-facebook text-xl"></i></a>
                    </div>
                </div>
            </div>

            <!-- Middle bar -->
            <div class="bg-gray-800 text-gray-300 text-center text-sm px-6 py-4 mt-8">
                At CaptainDiscounts.com, we strive to bring you the best coupon codes, deals, reviews, and money-saving tips. When you use our links to make a purchase, we may earn a commission at no additional cost to you. This helps us maintain our free service for all users. We only promote products and services we genuinely believe will benefit our users, and we indicate when content includes affiliate links. Thank you for supporting CaptainDiscounts.com!
            </div>

            <!-- Bottom bar -->
            <div class="bg-lime-500 text-black text-sm px-6 py-3 flex flex-col md:flex-row justify-between items-center">
                <p class="mb-2 md:mb-0">© 2025 Captain Discount. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="hover:underline">Terms & Conditions</a>
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    <a href="#" class="hover:underline">Cookies</a>
                </div>
            </div>
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
