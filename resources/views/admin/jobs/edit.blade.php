@extends('layouts.app')
@section('content')
<h1>求人編集</h1>
<form action="{{ route('admin.jobs.update', $job) }}" method="POST" class="mt-4">
    @csrf @method('PUT')
    <div class="mb-3"><input class="form-control" name="title" value="{{ $job->title }}" required></div>
    <div class="mb-3"><textarea class="form-control" name="description" required>{{ $job->description }}</textarea></div>
    <div class="mb-3"><input class="form-control" name="location" value="{{ $job->location }}" required></div>
    <div class="mb-3"><input class="form-control" name="employment_type" value="{{ $job->employment_type }}" required></div>
    <div class="mb-3"><input class="form-control" name="salary" value="{{ $job->salary }}"></div>
    <div class="mb-3"><input class="form-control" name="job_category" value="{{ $job->job_category }}" required></div>
    <button type="submit" class="btn btn-primary">更新</button>
</form>
@endsection