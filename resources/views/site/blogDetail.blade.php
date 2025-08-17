@extends('site.layout')

@section('content')


<div class="container mx-auto px-4 py-8">
    <!-- Blog Header -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
        <!-- Blog Image -->
        <img src="{{ asset('images/blogs/'.$blog->image) }}"
             alt="{{ $blog->title }}"
             class="w-full h-64 md:h-96 object-cover">

        <!-- Blog Content -->
        <div class="p-6 md:p-10">
            <!-- Blog Title -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ $blog->name }}
            </h1>

            <!-- Meta Info (optional) -->
            <div class="flex items-center text-gray-500 text-sm mb-6 space-x-4">
                <span>✍️ by {{ $blog->author ?? 'Admin' }}</span>
                <span>📅 {{ $blog->created_at->format('M d, Y') }}</span>
            </div>

            <!-- Blog Detail -->
            <div class="text-gray-700 leading-relaxed text-lg space-y-4">
                {!! nl2br(e($blog->detail)) !!}
            </div>
        </div>
    </div>
</div>
@endsection
