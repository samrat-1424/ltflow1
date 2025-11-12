@extends('admin.layout')

@section('title', 'Dashboard')
@section('subtitle', 'Quick overview of your admin workspace')

@section('content')
    <div class="row g-4">
        <div class="col-md-6 col-xl-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Welcome back!</h5>
                    <p class="card-text text-muted mb-3">
                        Use the navigation to manage blog posts and keep the site fresh.
                    </p>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary btn-sm">Manage Blogs</a>
                </div>
            </div>
        </div>
    </div>
@endsection
