@extends('admin.layout')

@section('title', 'Manage Blogs')

@section('subtitle', 'Overview of all blog posts')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h5 mb-1">Blogs</h2>
            <p class="text-muted small mb-0">Manage the articles shown on the public site.</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">+ Add New Blog</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Featured Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $blog)
                            <tr>
                                <td class="align-middle">{{ $blog->title }}</td>
                                <td class="align-middle">
                                    <div class="ratio ratio-4x3" style="max-width: 120px;">
                                        @if($blog->featured_image_path)
                                            <img src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" class="rounded object-fit-cover">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center bg-light border rounded text-muted">
                                                <span class="small">No image</span>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="badge {{ $blog->is_published ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $blog->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                </td>
                                <td class="align-middle">{{ $blog->created_at->format('M d, Y') }}</td>
                                <td class="align-middle text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this blog?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">No blogs yet. Start by creating a new post.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
