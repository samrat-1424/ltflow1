@extends('layouts.app')

@section('content')
<section class="py-6 py-md-8 bg-light">
    <div class="container px-4 px-md-0">
        <div class="row justify-content-center mb-5 text-center">
            <div class="col-lg-8">
                <p class="text-uppercase text-primary fw-semibold small mb-2">Insights</p>
                <h1 class="display-5 fw-bold">Latest Blogs & Resources</h1>
                <p class="text-muted lead mb-0">Stay updated with the latest thought leadership from LT Flow.</p>
            </div>
        </div>

        <div class="row g-4">
            @forelse ($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 shadow-sm border-0">
                        @if ($blog->featured_image_path)
                            <a href="{{ route('blogs.show', $blog) }}" class="ratio ratio-16x9">
                                <img src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" class="card-img-top rounded-top object-fit-cover">
                            </a>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h2 class="h5 fw-semibold">
                                <a href="{{ route('blogs.show', $blog) }}" class="text-decoration-none text-dark">
                                    {{ $blog->title }}
                                </a>
                            </h2>
                            <p class="text-muted small mb-3">{{ $blog->created_at->format('M d, Y') }}</p>
                            <p class="text-muted flex-grow-1">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}</p>
                            <div>
                                <a href="{{ route('blogs.show', $blog) }}" class="text-primary fw-semibold text-decoration-none">
                                    Read more &rarr;
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <h2 class="h4">No blog posts yet</h2>
                        <p class="text-muted">Check back soon for more insights and updates.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                {{ $blogs->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</section>
@endsection

