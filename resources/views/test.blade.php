<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dropdown Toggle Input</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8">

    <div class="max-w-md mx-auto">
        <!-- Dropdown -->
        <label for="type" class="block mb-1 text-sm font-medium text-gray-700">Select Type</label>
        <select id="type" name="type" class="w-full p-2 border rounded">
            <option value="deals">Deals</option>
            <option value="coupon">Coupon Code</option>
        </select>

        <!-- Hidden Input -->
        <div id="couponField" class="mt-4 hidden">
            <label for="coupon_code" class="block mb-1 text-sm font-medium text-gray-700">Enter Coupon Code</label>
            <input type="text" name="coupon_code" id="coupon_code" class="w-full p-2 border rounded" placeholder="Enter code">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const typeSelect = document.getElementById('type');
            const couponField = document.getElementById('couponField');

            function toggleCouponField() {
                if (typeSelect.value === 'coupon') {
                    couponField.classList.remove('hidden');
                } else {
                    couponField.classList.add('hidden');
                }
            }

            // Initial check
            toggleCouponField();

            // Change listener
            typeSelect.addEventListener('change', toggleCouponField);
        });
    </script>

</body>
</html>
