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
        Schema::create('course_user_module_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('module_index');
            $table->unsignedTinyInteger('progress')->default(0);
            $table->timestamps();
            $table->unique(['course_user_id', 'course_id', 'module_index'], 'cump_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_user_module_progress');
    }
};
