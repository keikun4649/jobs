<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>求人サイト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    @yield('content')
</div>
</body>
<footer class="py-4 text-center">
    <p><a href="https://github.com/keikun4649/jobs" target="_blank" class="text-muted">GitHub</a></p>
    <a href="{{ route('admin.jobs.index') }}" class="text-muted">管理画面</a>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>