@extends('layouts.app')
@section('content')
<div class="py-4">
    <h1 class="mb-4">職種から求人を探す</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $category }}</h5>
                    <p class="card-text">{{ $category }}に関する最新の求人を掲載中。希望の勤務条件で探せます。</p>
                    <a href="{{ route('jobs.index', ['category' => $category]) }}" class="btn btn-outline-primary mt-auto">{{ $category }}の求人を見る</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
