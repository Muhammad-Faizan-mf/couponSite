@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Edit FAQ</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('faqs.index') }}">
            <i class="fa fa-arrow-left"></i> Back
        </a>
    </div>

    <!-- FAQ Edit Form -->
    <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">FAQ Question</label>
            <input type="text" name="question" value="{{ old('question', $faq->question) }}" class="form-control" required hidden>
        </div>

        <div class="mb-3">
            <label class="form-label">FAQ Answer</label>
            <textarea id="faq-editor" name="answer">{{ old('answer', $faq->answer) }}</textarea>
        </div>
         <div class="mb-3">
            <label for="brand" class="form-label"><strong>brand:</strong></label>
            <select name="brand_id" id="brand" class="form-control" style="width:350px">
                <option value="">--- Select brand ---</option>
                @foreach ($brands as $key => $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $faq->brand_id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
                                @endforeach
            </select>

            @error('category')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-success">Update</button>
    </form>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
class MyUploadAdapter {
    constructor(loader) {
        this.loader = loader;
    }
    upload() {
        return this.loader.file.then( file => new Promise( ( resolve, reject ) => {
            const data = new FormData();
            data.append('upload', file);
            data.append('_token', '{{ csrf_token() }}');

            fetch('{{ route('faqs.upload') }}', {
                method: 'POST',
                body: data
            })
            .then(response => response.json())
            .then(result => {
                if (result.url) {
                    resolve({ default: result.url });
                } else {
                    reject(result.error || 'Upload failed');
                }
            })
            .catch(() => reject('Upload failed'));
        } ) );
    }
    abort() {}
}

function MyCustomUploadAdapterPlugin(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
    };
}

ClassicEditor
    .create(document.querySelector('#faq-editor'), {
        extraPlugins: [ MyCustomUploadAdapterPlugin ],
    })
    .catch(error => console.error(error));
</script>


  </div>
</div>
@endsection
