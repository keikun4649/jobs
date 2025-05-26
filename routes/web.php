<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Admin\JobAdminController;
dd("test");
Route::get('/jobs', [JobController::class, 'top'])->name('jobs.top');
Route::get('/{category}', [JobController::class, 'index'])->name('jobs.index');
Route::get('/{category}/{job}', [JobController::class, 'show'])->name('jobs.show');

// 管理者用
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('jobs', JobAdminController::class);
});
