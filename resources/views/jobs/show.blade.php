@extends('layouts.app')
@section('content')
<article class="card">
    <div class="card-body">
        <h1 class="card-title">{{ $job->title }}</h1>
        <p><strong>勤務地:</strong> {{ $job->location }}</p>
        <p><strong>雇用形態:</strong> {{ $job->employment_type }}</p>
        <p><strong>給与:</strong> {{ $job->salary }}</p>
        <hr>
        <p class="card-text">{!! nl2br(e($job->description)) !!}</p>
    </div>
</article>
@endsection