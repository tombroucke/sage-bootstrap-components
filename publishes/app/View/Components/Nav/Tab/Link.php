<?php

namespace App\View\Components\Nav\Tab;

use Roots\Acorn\View\Component;

class Link extends Component
{
    public $pane = '';

    public $active = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $pane, bool $active = false)
    {
        $this->pane = $pane;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return $this->view('components.nav.tab.link');
    }
}
