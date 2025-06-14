
@extends('site.layout')

@section('content')
@foreach($categories as $category)
<h3 class="mt-10">{{ $category->name }}</h3>
<ul>
    @foreach($category->brands as $brand)
        <li>{{ $brand->name }} ..</li>
    @endforeach
</ul>
@endforeach

@endsection




