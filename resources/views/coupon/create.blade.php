@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Add New Product</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('coupons.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('coupons.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                id="inputName"
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Detail:</strong></label>
            <textarea
                class="form-control @error('detail') is-invalid @enderror"
                style="height:150px"
                name="detail"
                id="inputDetail"
                placeholder="Detail"></textarea>
            @error('detail')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputUrl" class="form-label"><strong>Url:</strong></label>
            <input
                type="url"
                name="url"
                class="form-control @error('url') is-invalid @enderror"
                id="inputUrl"
                placeholder="Url">
            @error('url')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputUrl" class="form-label"><strong>Coupon type:</strong></label>
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

        <div class="mb-3">
            <label for="inputState" class="form-label"><strong>State:</strong></label>
            <select id="state" name="state" class="w-full p-2 border rounded">
                <option value="Verified">Verified</option>
                <option value="Featured">Featured</option>
                <option value="Validated">Validated</option>
                <option value="None">None</option>

            </select>
            @error('state')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="inputPriority" class="form-label"><strong>Priority:</strong></label>
            <select id="priority" name="priority" class="w-full p-2 border rounded">
                <option value="No">No</option>
                <option value="Yes">Yes</option>

            </select>
            @error('priority')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="inputStartDate" class="form-label"><strong>Start Date:</strong></label>
            <input
                type="date"
                name="startDate"
                class="form-control @error('startDate') is-invalid @enderror"
                id="inputName"
                placeholder="Name">
            @error('startDate')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="inputEndDate" class="form-label"><strong>End Date:</strong></label>
            <input
                type="date"
                name="endDate"
                class="form-control @error('endDate') is-invalid @enderror"
                id="inputName"
                placeholder="Name">
            @error('endDate')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label"><strong>Brand:</strong></label>
            <select name="brand_id" id="brand" class="form-control" style="width:350px">
                <option value="">--- Select Brand ---</option>
                @foreach ($brand as $key => $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>

            @error('brand')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
            {{-- <div class="max-w-md mx-auto">
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
            </div> --}}


        <div class="mb-3">
            <label for="inputImage" class="form-label"><strong>Image:</strong></label>
            <input
                type="file"
                name="image"
                class="form-control @error('image') is-invalid @enderror"
                id="inputImage">
            @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

  </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
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
@endsection
