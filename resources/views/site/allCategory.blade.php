@extends('site.layout')

@section('content')

<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-6">Categories Overview</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($categories as $category)
                <a href="/category/{{$category->id }}/{{ Str::slug($category->name) }}">

            <div class="bg-white shadow-md rounded-lg p-5 border hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">
                    {{ $category->name }}
                </h3>
                <p class="text-sm text-gray-600">Brands:
                    <span class="font-bold text-gray-900">{{ $category->brand_count }} </span>
                    <p class="text-sm text-gray-600">Coupons:
                    <span class="font-bold text-green-600">{{ $category->coupon_count }}</span>
                </p>
                </p>

                {{-- <a href="{{ url('/category/' . $category->id) }}"
                   class="mt-3 inline-block text-sm bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    View Details
                </a> --}}
            </div>
        </a>
        @endforeach
    </div>
</div>


@endsection
