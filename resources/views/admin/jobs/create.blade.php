@extends('layouts.app')
@section('content')
<h1>求人新規作成</h1>
<form action="{{ route('admin.jobs.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="mb-3"><input class="form-control" name="title" placeholder="タイトル" required></div>
    <div class="mb-3"><textarea class="form-control" name="description" placeholder="仕事内容" required></textarea></div>
    <div class="mb-3"><input class="form-control" name="location" placeholder="勤務地" required></div>
    <div class="mb-3"><input class="form-control" name="employment_type" placeholder="雇用形態" required></div>
    <div class="mb-3"><input class="form-control" name="salary" placeholder="給与"></div>
    <div class="mb-3"><input class="form-control" name="job_category" placeholder="職種（例：看護師）" required></div>
    <button type="submit" class="btn btn-success">登録</button>
</form>
@endsection