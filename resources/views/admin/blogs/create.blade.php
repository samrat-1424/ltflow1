@extends('admin.layout')

@section('title', 'Add New Blog')

@section('content')
<form action="{{ route('admin.blogs.store') }}" method="POST">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" style="width:100%" value="{{ old('title') }}"><br><br>

    <label>Content (Markdown):</label><br> 
    
    <textarea id="markdown-editor" name="content" rows="10" cols="80">{{ old('content') }}</textarea><br><br>

    <label><input type="checkbox" name="is_published"> Publish</label><br><br> 

    <button type="submit">Save Blog</button> 
</form>
@endsection

@push('scripts') 
<script src="https://cdn.jsdelivr.net/npm/simplemde/dist/simplemde.min.js"></script>
<script>
    new SimpleMDE({ element: document.getElementById("markdown-editor") });    //SimpleMDE is a JavaScript library that provides a simple, embeddable Markdown editor for web applications.
</script> 

@endpush
