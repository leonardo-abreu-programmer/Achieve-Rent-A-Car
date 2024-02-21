<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $current;
    public $is;
    public $user;
    
    /**
     * Create a new component instance.
     */
    public function __construct($current, $is, $user)
    {
        $this->current = $current;
        $this->is = $is;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.sidebar');
    }
}
