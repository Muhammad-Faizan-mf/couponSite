@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Add New Brand</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('brands.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="inputName" class="form-label"><strong>Slug:</strong></label>
            <input
                type="text"
                name="slug"
                class="form-control @error('slug') is-invalid @enderror"
                id="inputSlug"
                placeholder="Slug">
            @error('slug')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="store_url" class="form-label"><strong>Store URL:</strong></label>
            <input
                type="url"
                name="store_url"
                class="form-control @error('store_url') is-invalid @enderror"
                id="inputStoreUrl"
                placeholder="Store Url">
            @error('store_url')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="affiliate_url" class="form-label"><strong>Affiliate URL:</strong></label>
            <input
                type="url"
                name="affiliate_url"
                class="form-control @error('affiliate_url') is-invalid @enderror"
                id="inputAffiliateUrl"
                placeholder="Affiliate Url">
            @error('affiliate_url')
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
            <label for="category" class="form-label"><strong>Category:</strong></label>
            <select name="category_id" id="category" class="form-control" style="width:350px">
                <option value="">--- Select Category ---</option>
                @foreach ($category as $key => $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            @error('category')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


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
@endsection
