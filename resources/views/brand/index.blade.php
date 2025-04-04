@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Brands</h2>
  <div class="card-body">

        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('brands.create') }}"> <i class="fa fa-plus"></i> Create New brand</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($brands as $brand)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/brands/{{ $brand->image }}" width="100px"></td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->detail }}</td>
                    <td>
                        <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('brands.show',$brand->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('brands.edit',$brand->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">There are no data.</td>
                </tr>
            @endforelse
            </tbody>

        </table>

        {!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}

  </div>
</div>
@endsection
