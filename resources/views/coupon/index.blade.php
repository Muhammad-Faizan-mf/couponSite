@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Coupons</h2>
  <div class="card-body">

        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('coupons.create') }}"> <i class="fa fa-plus"></i> Create New Coupon</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Expiry</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($coupons as $coupon)
                <tr>
                    <td>{{ ++$i }}</td>
                    {{-- <td><img src="/images/coupons/{{ $coupon->image }}" width="100px"></td> --}}
                    <td>{{$coupon->brand->name ?? "No brand"}}</td>
                    <td>{{ $coupon->name }}</td>
                    <td>{{ $coupon->detail }}</td>
                    <td>{{ $coupon->endDate }}</td>

                    <td>
                        <form action="{{ route('coupons.destroy',$coupon->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('coupons.show',$coupon->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('coupons.edit',$coupon->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

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

        {!! $coupons->withQueryString()->links('pagination::bootstrap-5') !!}

  </div>
</div>
@endsection
