<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    protected $selected;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $message,
        public string $alertType, //in blade diventa alert-type
        public string $value,

    ) {
    }

    public function isSelected(string $value): bool
    {
        if ($value == "selected") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
