@extends('admin.layout')

@section('title', 'Manage Blogs')

@section('content')
    <a href="{{ route('admin.blogs.create') }}">+ Add New Blog</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>

    @endif

    <table border="1" cellpadding="8" width="100%">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->is_published ? 'Published' : 'Draft' }}</td>
            <td>{{ $blog->created_at->format('Y-m-d') }}</td>
            <td>
                <a href="{{ route('admin.blogs.edit', $blog->id) }}">Edit</a> |
                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this blog?')">Delete</button> 
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
