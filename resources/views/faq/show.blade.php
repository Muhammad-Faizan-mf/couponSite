@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Show Blog</h2>
  <div class="card-body">
    {{-- @dd($blog) --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('faqs.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong> <br/>
                {{ $faq->question }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Answer:</strong> <br/>
                {{ $faq->answer }}

            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Category:</strong> <br/>
                {{ $blog->category->name }}

            </div>
        </div> --}}
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong><br/>
                <img src="/images/blogs/{{ $blog->image }}" width="500px">
            </div>
        </div> --}}
    </div>

  </div>
</div>
@endsection
