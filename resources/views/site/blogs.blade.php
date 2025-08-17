
@extends('site.layout')

@section('content')




<section class="py-12 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center mb-8 mt-10">Blogs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach  ($recentBlogs as $recentBlog)

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/blogs/{{$recentBlog->image}}" alt="Blog 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">{{$recentBlog->name}}</h3>
                    {{-- <p class="text-gray-600 text-sm">By: Isaac Armstrong</p> --}}
                    <p class="text-gray-500 mt-2">{{ \Illuminate\Support\Str::limit($recentBlog->detail, 40) }}</p>
                    {{-- <p class="text-gray-500 mt-2">{{ \Illuminate\Support\Str::limit($recentBlog->detail, 500) }}</p> --}}

                    {{-- <p class="text-gray-500 mt-2">{{$recentBlog->detail}}</p> --}}
                    <a href="/blog/{{$recentBlog->id}}/{{ Str::slug($recentBlog->name) }}" class="text-blue-600 font-semibold mt-4 inline-block">CONTINUE READING →</a>
                </div>
            </div>
            @endforeach


            {{-- <div class="bg-white rounded-lg shadow-lg overflow-hidden">
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
            </div> --}}
        </div>
    </div>
</section>

@endsection




