@extends('layouts.app')
@section('content')
    <h1>職業カテゴリ一覧</h1>
    <ul class="list-group">
        @foreach ($jobs as $job)
            <a href="{{ route('jobs.show', ['category' => $job->job_category, 'job' => $job->id]) }}" class="list-group-item list-group-item-action">{{ $job->title }}</a>
        @endforeach
    </ul>
@endsection
