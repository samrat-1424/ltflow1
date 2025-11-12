@extends('layouts.app')

@section('content')
<section class="py-6 py-md-8">
    <div class="container px-4 px-md-0">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="text-uppercase text-primary fw-semibold small mb-2">Insights</p>
                <h1 class="display-5 fw-bold mb-3">{{ $blog->title }}</h1>
                <p class="text-muted">{{ $blog->created_at->format('F j, Y') }}</p>
            </div>
        </div>

        @if ($blog->featured_image_path)
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <img src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" class="img-fluid rounded shadow-sm w-100 object-fit-cover" style="max-height: 420px;">
                </div>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="blog-content">
                    {!! $blog->content !!}
                </article>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const content = document.querySelector('.blog-content');
        if (!content) return;

        content.querySelectorAll('h1, h2, h3').forEach((heading) => {
            heading.classList.add('mt-5', 'mb-3', 'fw-semibold');
        });

        content.querySelectorAll('p').forEach((paragraph) => {
            paragraph.classList.add('mb-3', 'text-muted');
        });

        content.querySelectorAll('img').forEach((image) => {
            image.classList.add('img-fluid', 'rounded', 'shadow-sm', 'my-4');
            if (!image.hasAttribute('loading')) {
                image.setAttribute('loading', 'lazy');
            }
        });
    });
</script>
@endpush

