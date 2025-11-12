@extends('admin.layout')

@section('title', 'Edit Blog')

@section('content')
<form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title:</label><br>
    <input type="text" name="title" style="width:100%" value="{{ $blog->title }}"><br><br>

    <label>Content (Markdown):</label><br>
    <textarea id="markdown-editor" name="content" rows="10" cols="80">{{ $blog->content }}</textarea><br><br>

    <label><input type="checkbox" name="is_published" {{ $blog->is_published ? 'checked' : '' }}> Publish</label><br><br>

    <button type="submit">Update Blog</button>
</form>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/simplemde/dist/simplemde.min.js"></script>
<script>
    new SimpleMDE({ element: document.getElementById("markdown-editor") }); 
</script> 
@endpush 
