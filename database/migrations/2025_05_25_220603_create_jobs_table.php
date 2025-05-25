<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');              // 求人タイトル
            $table->text('description');          // 求人内容
            $table->string('location');           // 勤務地（例：東京都新宿区）
            $table->string('employment_type');    // 雇用形態（常勤・パートなど）
            $table->string('salary')->nullable(); // 給与
            $table->string('job_category');       // 職種（例：看護師）
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
