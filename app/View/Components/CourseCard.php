<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseCard extends Component
{
    public $image, $badge, $tag, $title, $instructorImage, $instructor, $role, $students, $rating, $ratingCount, $price;

    public function __construct($image, $badge, $tag, $title, $instructorImage, $instructor, $role, $students, $rating, $ratingCount, $price)
    {
        $this->image = $image;
        $this->price = $price;
        $this->badge = $badge;
        $this->tag = $tag;
        $this->title = $title;
        $this->instructorImage = $instructorImage;
        $this->instructor = $instructor;
        $this->role = $role;
        $this->students = $students;
        $this->rating = $rating;
        $this->ratingCount = $ratingCount;
    }

    public function render()
    {
        return view('components.course-card');
    }
}
