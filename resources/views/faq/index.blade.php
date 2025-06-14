@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Faqs</h2>
  <div class="card-body">

        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('faqs.create') }}"> <i class="fa fa-plus"></i> Create New faq</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    {{-- <th>Image</th> --}}
                    <th>Question</th>
                    <th>Answer</th>
                    {{-- <th>Details</th> --}}
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($faqs as $faq)
                <tr>
                    <td>{{ ++$i }}</td>
                    {{-- <td><img src="/images/faqs/{{ $faq->image }}" width="100px"></td> --}}
                    <td>{{ $faq->question }}</td>
                    {{-- <td>{{ $faq->category->name?? "No Category" }}</td> --}}

                    <td>{{ $faq->answer }}</td>
                    <td>
                        <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('faqs.show',$faq->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('faqs.edit',$faq->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

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

        {!! $faqs->withQueryString()->links('pagination::bootstrap-5') !!}

  </div>
</div>
@endsection
