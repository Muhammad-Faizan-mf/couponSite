@extends('theme.default')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Add New FAQ</h2>
  <div class="card-body">

    <!-- Your form -->
<form action="{{ route('faqs.store') }}" method="POST">
    @csrf
    <input type="text" name="question" class="form-control mb-3" placeholder="FAQ Question" required value="123" hidden>
    <textarea id="faq-editor" name="answer"></textarea>
    <div class="mb-3">
            <label for="brand" class="form-label"><strong>Brands:</strong></label>
            <select name="brand_id" id="brand" class="form-control" style="width:350px">
                <option value="">--- Select Brand ---</option>
                @foreach ($brands as $key => $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            @error('brands')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>

<!-- CKEditor 5 -->

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
class MyUploadAdapter {
    constructor(loader) {
        this.loader = loader;
    }
    upload() {
        return this.loader.file.then(file => new Promise((resolve, reject) => {
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
        }));
    }
    abort() {}
}

function MyCustomUploadAdapterPlugin(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
    };
}

ClassicEditor.create(document.querySelector('#faq-editor'), {
    extraPlugins: [ MyCustomUploadAdapterPlugin ]
}).catch(error => console.error(error));
</script>

@endsection
