<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropZone extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $class = "flex items-center justify-center rounded-lg border-2 border-dashed border-gray-300 p-4 hover:bg-white/5",
        public string $hover = "bg-white/5",
        public string $placeholder = "Drag and drop an image here, or click to select one.",
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.drop-zone');
    }
}
