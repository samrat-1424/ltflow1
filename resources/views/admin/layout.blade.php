<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Blog Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    @stack('styles')
</head>
<body class="bg-light">
    <div class="d-flex min-vh-100">
        <nav class="bg-dark text-white p-4" style="width: 240px;">
            <div class="mb-4">
                <h4 class="mb-0">Admin Panel</h4>
                <p class="text-white-50 small mb-0">LT Flow</p>
            </div>
            <ul class="nav nav-pills flex-column gap-2">
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-primary' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('admin.blogs.*') ? 'active bg-primary' : '' }}" href="{{ route('admin.blogs.index') }}">Blogs</a>
                </li>
                <li class="nav-item mt-4">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light w-100">Sign out</button>
                    </form>
                </li>
            </ul>
        </nav>

        <main class="flex-grow-1 p-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-1">@yield('title')</h1>
                    <p class="text-muted small mb-0">@yield('subtitle')</p>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>
