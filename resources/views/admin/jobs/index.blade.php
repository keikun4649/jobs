@extends('layouts.app')
@section('content')
<h1 class="mb-4">求人一覧（管理画面）</h1>
<a href="{{ route('admin.jobs.create') }}" class="btn btn-primary mb-3">＋ 新規作成</a>
<table class="table table-striped">
<tr>
    <th>ID</th><th>タイトル</th><th>職種</th><th>操作</th>
</tr>
@foreach ($jobs as $job)
<tr>
    <td>{{ $job->id }}</td>
    <td>{{ $job->title }}</td>
    <td>{{ $job->job_category }}</td>
    <td>
        <a href="{{ route('admin.jobs.edit', $job) }}" class="btn btn-sm btn-secondary">編集</a>
        <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('削除してよいですか？')">削除</button>
        </form>
    </td>
</tr>
@endforeach
</table>
{{ $jobs->links() }}
@endsection
