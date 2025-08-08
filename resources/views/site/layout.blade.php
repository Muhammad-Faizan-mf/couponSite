


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

    <meta charset="UTF-8">
    <title>@yield('title', 'Captain Discounts')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
          display: none !important;
        }
      </style>

</head>
<body class="bg-white text-black font-sans">

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<style>
    [x-cloak] { display: none !important; }
  </style>

  <nav x-data="{ open: false }" class="w-full bg-black text-white px-4 md:px-12 py-4 flex justify-between items-center relative">
    <div class="text-white text-xl font-bold">
        <a href="/">
      <img src="/logo.png" alt="Logo" class="h-8" />
    </a>
    </div>

    <ul class="hidden md:flex space-x-6 text-sm">
      <li><a href="#" class="hover:text-green-400">How it Works</a></li>
      <li><a href="/store" class="hover:text-green-400">Promo Codes</a></li>
      <li><a href="#" class="hover:text-green-400">Categories</a></li>
      <li><a href="all-stores" class="hover:text-green-400">Store</a></li>
      <li><a href="#" class="hover:text-green-400">Blogs</a></li>
    </ul>

    <div class="hidden md:flex items-center space-x-4">
      <button aria-label="Search" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35a7.5 7.5 0 1116.65 16.65z" />
        </svg>
      </button>
      <a href="#" class="border border-green-500 text-green-500 px-4 py-1 rounded-full text-sm">Login</a>
      <a href="#" class="bg-green-500 text-black px-4 py-1 rounded-full text-sm">Get Coupons</a>
    </div>

    <button @click="open = !open" class="md:hidden focus:outline-none" aria-label="Toggle menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path :class="{'hidden': open, 'inline-flex': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        <path :class="{'hidden': !open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <ul
      x-show="open"
      @click.away="open = false"
      x-cloak
      class="absolute top-full left-0 w-full bg-black text-white flex flex-col md:hidden px-4 py-4 space-y-4 z-20"
    >
      <li><a href="#" class="hover:text-green-400 block">How it Works</a></li>
      <li><a href="#" class="hover:text-green-400 block">Promo Codes</a></li>
      <li><a href="#" class="hover:text-green-400 block">Categories</a></li>
      <li><a href="/all-stores" class="hover:text-green-400 block">Store</a></li>
      <li><a href="#" class="hover:text-green-400 block">Blogs</a></li>
      <li><a href="#" class="border border-green-500 text-green-500 px-4 py-1 rounded-full text-sm block text-center">Login</a></li>
      <li><a href="#" class="bg-green-500 text-black px-4 py-1 rounded-full text-sm block text-center">Get Coupons</a></li>
    </ul>
  </nav>

  <script src="//unpkg.com/alpinejs" defer></script>


 @yield('content')

 <footer class="bg-black text-white text-sm">
     <div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row justify-between gap-10 items-start lg:items-center">
             <div class="flex flex-col items-center lg:items-start space-y-4 text-center lg:text-left">
                <a href="/">
                <img src="logo.png" alt="Captain Discounts Logo" class="h-10">
            </a>
                <p class="text-gray-400">© 2025 Captain Discount. All rights reserved.</p>
                <div class="flex space-x-4 text-white text-lg mt-2">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

             <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 w-full text-center sm:text-left">
                 <div>
                    <h4 class="font-semibold mb-3">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                 <div>
                    <h4 class="font-semibold mb-3">Resources</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Store Directory</a></li>
                        <li><a href="#">Categories</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-3">Legal</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

     <div class="bg-gray-800 text-center text-gray-300 px-6 py-5 text-xs">
        At CaptainDiscounts.com, we strive to bring you the best coupon codes, deals, reviews, and money-saving tips. When you use our links to make a purchase, we may earn a commission at no additional cost to you. This helps us maintain our free service for all users. We only promote products and services we genuinely believe will benefit our users, and we indicate when content includes affiliate links. Thank you for supporting CaptainDiscounts.com!
    </div>

     <div class="bg-lime-500 text-black text-xs py-4 px-6">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center text-center gap-2">
            <p class="font-semibold">© 2025 Captain Discount. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="hover:underline">Terms & Conditions</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Cookies</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>



</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');

             if (menu.classList.contains('hidden')) {
                icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Hamburger
            } else {
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // X mark
            }
        });
    });
</script>

</html>
