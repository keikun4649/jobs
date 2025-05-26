@extends('layouts.app')
@section('content')
<div class="py-4">
    <h1 class="mb-4">{{ $category }}の求人一覧</h1>

    <form method="GET" class="mb-4">
        <div class="row g-3">
            <div class="col-md-4">
                <input type="text" name="keyword" value="{{ request('keyword') }}" class="form-control" placeholder="キーワードで絞り込み">
            </div>
            <div class="col-md-4">
                <select name="location" class="form-select">
                    <option value="">勤務地で絞り込み</option>
                    @foreach ($locations as $loc)
                        <option value="{{ $loc }}" @if(request('location') == $loc) selected @endif>{{ $loc }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">検索</button>
            </div>
        </div>
    </form>

    @foreach ($jobs as $job)
    <div class="card mb-3 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">{{ $job->title }}</h5>
            <p class="card-text mb-1">勤務地：{{ $job->location }} ｜ 雇用形態：{{ $job->employment_type }}</p>
            <p class="card-text">{{ Str::limit($job->description, 100) }}</p>
            <a href="{{ route('jobs.show', ['category' => $job->job_category, 'job' => $job->id]) }}" class="btn btn-outline-secondary">詳細を見る</a>
        </div>
    </div>
    @endforeach

    <div class="mt-4">
        {{ $jobs->withQueryString()->links() }}
    </div>
</div>
@endsection
