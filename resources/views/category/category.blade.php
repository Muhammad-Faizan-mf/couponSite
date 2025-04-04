@extends('theme.default')

@section('content')

<div class="container-fluid px-4">


    <h1 class="mt-4">Categories</h1>
    <div>

        <a class="btn btn-success my-4" href="{{ route('category.create') }}"> Create New Category</a>
    </div>


    <div class="row">

        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>
                            <form action="{{ route('category.destroy',$cat->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('category.show',$cat->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href="{{ route('category.edit',$cat->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>                    </tr>
                @empty
                    <tr>
                        <td colspan="3">There are no categories.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {!! $category->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
</div>


@endsection
