<?php

use App\Models\CourseCategory;
use App\Models\CoursePublisher;
use App\Models\CourseUserReview;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('discounted_price');
            $table->text('description');
            $table->string('thumbnail_img');
            $table->foreignIdFor(CoursePublisher::class)->constrained();
            $table->foreignIdFor(CourseUserReview::class)->constrained();
            $table->foreignIdFor(CourseCategory::class)->constrained();
            $table->enum('status', ['Self-paced', 'Instructor-led', 'Onsite', 'HybridCourse']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
