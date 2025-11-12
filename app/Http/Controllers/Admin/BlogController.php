<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'is_published' => ['nullable'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
        ]);

        $imagePath = $request->hasFile('featured_image')
            ? $this->storeImage($request->file('featured_image'))
            : null;

        Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'is_published' => $request->boolean('is_published'),
            'featured_image_path' => $imagePath,
        ]);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'is_published' => ['nullable'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
        ]);

        $data = [
            'title' => $validated['title'],
            'content' => $validated['content'],
            'is_published' => $request->boolean('is_published'),
        ];

        if ($request->hasFile('featured_image')) {
            $this->deleteImage($blog->featured_image_path);
            $data['featured_image_path'] = $this->storeImage($request->file('featured_image'));
        }

        $blog->update($data);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $this->deleteImage($blog->featured_image_path);
        $blog->delete();

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully!');
    }

    protected function storeImage(\Illuminate\Http\UploadedFile $image): string
    {
        $destination = public_path('blog/image');
        if (! File::isDirectory($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        $filename = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
        $filename = $filename ?: 'blog-image';
        $uniqueName = $filename . '-' . time() . '.' . $image->getClientOriginalExtension();

        $image->move($destination, $uniqueName);

        return 'blog/image/' . $uniqueName;
    }

    protected function deleteImage(?string $path): void
    {
        if (! $path) {
            return;
        }

        $fullPath = public_path($path);
        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }
}
