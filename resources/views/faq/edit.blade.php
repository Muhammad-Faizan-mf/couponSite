@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Edit Blog</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('faqs.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('faqs.update',$faq->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Question:</strong></label>
            <input
                type="text"
                name="question"
                value="{{ $faq->question }}"
                class="form-control @error('name') is-invalid @enderror"
                id="inputName"
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Answer:</strong></label>
            <textarea
                class="form-control @error('detail') is-invalid @enderror"
                style="height:150px"
                name="answer"
                id="inputDetail"
                placeholder="Detail">{{ $faq->answer }}</textarea>
            @error('detail')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="category" class="form-label"><strong>Category:</strong></label>
            <select name="category_id" id="category" class="form-control" style="width:350px">
                <option value="">--- Select Category ---</option>
                @foreach ($category as $key => $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $faq->category_id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
                                @endforeach
            </select>

            @error('category')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div> --}}



        {{-- <div class="mb-3">
            <label for="inputImage" class="form-label"><strong>Image:</strong></label>
            <input
                type="file"
                name="image"
                class="form-control @error('image') is-invalid @enderror"
                id="inputImage">
            <img src="/images/faqs/{{ $faq->image }}" width="300px">
            @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div> --}}

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>

  </div>
</div>
@endsection
