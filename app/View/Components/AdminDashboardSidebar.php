<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminDashboardSidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $active;

    public function __construct(string $active = "")
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-dashboard-sidebar');
    }
}