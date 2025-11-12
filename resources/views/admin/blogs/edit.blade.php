@extends('admin.layout')

@section('title', 'Edit Blog')

@section('subtitle', 'Update the selected blog entry')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form id="blog-form" action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" novalidate enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $blog->title) }}"
                    class="form-control @error('title') is-invalid @enderror"
                    required
                >
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content-editor" class="form-label">Content</label>
                <input
                    type="hidden"
                    id="content-input"
                    name="content"
                    value="{{ old('content', $blog->content) }}"
                >
                <div id="content-editor" class="border rounded @error('content') border-danger @enderror" style="min-height: 280px;"></div>
                @error('content')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="featured_image" class="form-label">Featured Image</label>
                <input
                    type="file"
                    id="featured_image"
                    name="featured_image"
                    class="form-control @error('featured_image') is-invalid @enderror"
                    accept="image/*"
                >
                @error('featured_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if($blog->featured_image_path)
                    <div class="mt-2">
                        <p class="text-muted small mb-1">Current image:</p>
                        <img src="{{ asset($blog->featured_image_path) }}" alt="Featured image" class="img-fluid rounded shadow-sm" style="max-height: 180px;">
                    </div>
                @endif
            </div>

            <div class="form-check form-switch mb-4">
                <input class="form-check-input" type="checkbox" role="switch" id="is_published" name="is_published" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Publish</label>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Blog</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>
<script>
const quill = new Quill('#content-editor', {
    theme: 'snow',
    placeholder: 'Update your blog content here...',
    modules: {
        toolbar: [
            [{ header: [1, 2, 3, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ list: 'ordered' }, { list: 'bullet' }],
            [{ align: [] }],
            ['link', 'blockquote', 'code-block'],
            ['clean']
        ]
    },
    formats: [
        'header',
        'bold', 'italic', 'underline', 'strike',
        'list', 'bullet',
        'align',
        'link', 'blockquote', 'code-block'
    ]
});

const contentInput = document.getElementById('content-input');
if (contentInput.value) {
    quill.root.innerHTML = contentInput.value;
}

quill.on('text-change', () => {
    contentInput.value = quill.root.innerHTML;
});

const form = document.getElementById('blog-form');
form.addEventListener('submit', () => {
    contentInput.value = quill.root.innerHTML;
});
</script>
@endpush
