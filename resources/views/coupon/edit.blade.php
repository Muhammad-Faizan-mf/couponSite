@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Edit Product</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('coupons.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('coupons.update', $coupon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label"><strong>Name:</strong></label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $coupon->name) }}" placeholder="Name">
            @error('name') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Detail:</strong></label>
            <textarea name="detail" class="form-control @error('detail') is-invalid @enderror" style="height:150px">{{ old('detail', $coupon->detail) }}</textarea>
            @error('detail') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Url:</strong></label>
            <input type="url" name="url" class="form-control @error('url') is-invalid @enderror"
                   value="{{ old('url', $coupon->url) }}" placeholder="Url">
            @error('url') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Coupon type:</strong></label>
            <select id="type" name="type" class="w-full p-2 border rounded">
                <option value="deals" {{ old('type', $coupon->type) == 'deals' ? 'selected' : '' }}>Deals</option>
                <option value="coupon" {{ old('type', $coupon->type) == 'coupon' ? 'selected' : '' }}>Coupon Code</option>
            </select>

            <div id="couponField" class="mt-4 {{ old('type', $coupon->type) === 'coupon' ? '' : 'hidden' }}">
                <label for="coupon_code" class="block mb-1 text-sm font-medium text-gray-700">Enter Coupon Code</label>
                <input type="text" name="coupon_code" id="coupon_code" class="w-full p-2 border rounded"
                       value="{{ old('coupon_code', $coupon->coupon_code) }}" placeholder="Enter code">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>State:</strong></label>
            <select name="state" id="state" class="w-full p-2 border rounded">
                @foreach (['Verified', 'Featured', 'Validated', 'None'] as $state)
                    <option value="{{ $state }}" {{ old('state', $coupon->state) == $state ? 'selected' : '' }}>{{ $state }}</option>
                @endforeach
            </select>
            @error('state') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        {{-- <div class="mb-3">
            <label class="form-label"><strong>Priority:</strong></label>
            <select name="priority" id="priority" class="w-full p-2 border rounded">
                <option value="No" {{ old('priority', $coupon->priority) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Yes" {{ old('priority', $coupon->priority) == 'Yes' ? 'selected' : '' }}>Yes</option>
            </select>
            @error('priority') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div> --}}

        <div class="mb-3">
            <label class="form-label"><strong>Start Date:</strong></label>
            <input type="date" name="startDate" class="form-control @error('startDate') is-invalid @enderror"
                   value="{{ old('startDate', $coupon->startDate ? $coupon->startDate : '') }}">
            @error('startDate') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>End Date:</strong></label>
            <input type="date" name="endDate" class="form-control @error('endDate') is-invalid @enderror"
                   value="{{ old('endDate', $coupon->endDate ? $coupon->endDate : '') }}">
            @error('endDate') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Brand:</strong></label>
            <select name="brand_id" id="brand" class="form-control" style="width:350px">
                <option value="">--- Select Brand ---</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id', $coupon->brand_id) == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
            @error('brand_id') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>


        <div class="mb-3">
            <label for="priority" class="form-label"><strong>Priority:</strong></label>
            <select name="priority" id="priority" class="form-control" style="width:350px">
                <option value="">--- Select Priority ---</option>
                @for ($i = 1; $i <= 20; $i++)
                <option value="{{ $i }}" {{ old('brand_id', $coupon->brand_id) == $brand->id ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
            </select>

            @error('priority')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>




        <div class="mb-3">
            <label class="form-label"><strong>Discount Percentage:</strong></label>
            <input type="number" name="discount" class="form-control @error('discount') is-invalid @enderror"
                   value="{{ old('discount', $coupon->discount) }}" placeholder="%">
            @error('discount') <div class="form-text text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>

  </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const typeSelect = document.getElementById('type');
        const couponField = document.getElementById('couponField');

        function toggleCouponField() {
            couponField.classList.toggle('hidden', typeSelect.value !== 'coupon');
        }

        toggleCouponField();
        typeSelect.addEventListener('change', toggleCouponField);
    });
</script>
@endsection
