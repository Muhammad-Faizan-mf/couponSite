@extends('theme.default')

@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show Category</h2>

        </div>

        <div class="pull-right">

            {{-- <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a> --}}

        </div>

    </div>

</div>



<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 p-10 m-10">

        <div class="form-group">

            <strong>Name:</strong>
            {{ $category->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
{{--
        <div class="form-group">

            <strong>Details:</strong>

            {{ $category->detail }}

        </div>

    </div> --}}

</div>
@endsection
