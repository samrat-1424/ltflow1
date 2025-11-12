<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::where('is_published', true)
            ->latest()
            ->paginate(9);

        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog): View
    {
        abort_unless($blog->is_published, 404);

        return view('blogs.show', compact('blog'));
    }
}

