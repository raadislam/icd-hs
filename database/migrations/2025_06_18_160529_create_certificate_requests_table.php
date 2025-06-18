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
        Schema::create('certificate_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_user_id');
            $table->unsignedBigInteger('course_id');
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');
            $table->timestamp('requested_at')->useCurrent();
            $table->timestamp('sent_at')->nullable();
            $table->text('fail_reason')->nullable();
            $table->timestamps();

            $table->unique(['course_user_id', 'course_id'], 'certreq_user_course_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_requests');
    }
};
