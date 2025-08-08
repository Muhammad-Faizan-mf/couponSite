@extends('site.layout')

@section('content')
   <div class="flex justify-center  px-4 m-4">
    <section class=" w-full max-w-7xl grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 py-4 ">
        @foreach ($stores as $store)
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col items-center text-center p-4">
                <a href="/store/{{ $store->id }}" class="flex flex-col items-center space-y-3">
                    <img
                        src="{{ asset('images/brands/' . $store->image) }}"
                        alt="{{ $store->name ?? 'Brand Logo' }}"
                        class="h-16 object-contain max-w-full"
                    >
                    <div>
                        <p class="text-base font-semibold text-gray-800 hover:text-blue-600">{{ $store->name }}</p>
                        <p class="text-sm text-gray-500 mt-1">{{ $store->detail }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </section>
</div>



@endsection
