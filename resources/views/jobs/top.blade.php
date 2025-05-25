@extends('layouts.app')
@section('content')
<h1 class="mb-4">職業カテゴリ一覧</h1>
<div class="list-group">
@foreach ($categories as $category)
    <a href="{{ route('jobs.index', ['category' => $category]) }}" class="list-group-item list-group-item-action">{{ $category }}</a>
@endforeach
</div>
@endsection
