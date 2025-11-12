<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Blog Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplemde/dist/simplemde.min.css">
    <style>
        body { font-family: Arial; margin: 0; padding: 0; background: #f6f6f6; }
        .sidebar { width: 200px; background: #2c3e50; height: 100vh; position: fixed; color: white; padding: 20px; }
        .sidebar a { display: block; color: white; padding: 10px 0; text-decoration: none; }
        .sidebar a:hover { background: #34495e; }
        .content { margin-left: 220px; padding: 20px; }
        .header { background: #ecf0f1; padding: 10px; margin-bottom: 20px; }
        
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.blogs.index') }}">Blogs</a>
    </div>

    <div class="content">
        <div class="header">
            <h2>@yield('title')</h2>
        </div>

        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>
