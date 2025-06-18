<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_user_module_exam_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_user_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedInteger('module_index');
            $table->integer('score');
            $table->integer('total');
            $table->json('answers')->nullable();
            $table->timestamps();

            $table->unique(['course_user_id', 'course_id', 'module_index'], 'cume_user_course_mod_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_user_module_exam_results');
    }
};
