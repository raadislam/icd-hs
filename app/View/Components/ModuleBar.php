<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ModuleBar extends Component
{

    public $title;
    public $outcomes;
    public $hours;
    public $progress;
    public $id;
    public $locked;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $outcomes, $hours, $progress, $id, $locked = false)
    {

        $this->title = $title;
        $this->outcomes = $outcomes;
        $this->hours = $hours;
        $this->progress = (int) $progress;
        $this->id = $id;
        $this->locked = $locked;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.module-bar');
    }
}
