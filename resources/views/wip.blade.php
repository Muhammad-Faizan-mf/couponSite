<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white h-screen flex items-center justify-center">

    <div class="text-center px-6">
        <!-- Icon -->
        <div class="flex justify-center mb-6">
            <svg class="w-24 h-24 text-yellow-400 animate-bounce" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl md:text-5xl font-bold mb-4">🚧 We’re Under Construction 🚧</h1>
        <p class="text-gray-300 mb-8 max-w-xl mx-auto">
            Something exciting is on the way! We’re working hard to launch our new website.
        </p>

        <!-- Countdown (optional static placeholder) -->
        {{-- <div class="flex justify-center gap-6 mb-8 text-lg font-semibold">
            <div class="text-center">
                <span class="block text-3xl">10</span>
                <span class="text-gray-400 text-sm">Days</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl">05</span>
                <span class="text-gray-400 text-sm">Hours</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl">45</span>
                <span class="text-gray-400 text-sm">Minutes</span>
            </div>
        </div> --}}

        <!-- Email Notify Form -->
        {{-- <form action="#" method="POST" class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto">
            <input type="email" placeholder="Enter your email"
                class="w-full px-4 py-3 rounded-lg text-gray-900 focus:outline-none" required>
            <button type="submit"
                class="bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold transition">
                Notify Me
            </button>
        </form> --}}

        <!-- Footer -->
        <p class="mt-10 text-gray-500 text-sm">&copy; {{ date('Y') }} Captain Discounts. All Rights Reserved.</p>
    </div>

</body>
</html>
