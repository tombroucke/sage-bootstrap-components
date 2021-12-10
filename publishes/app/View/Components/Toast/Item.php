<?php

namespace App\View\Components\Toast;

use Roots\Acorn\View\Component;

class Item extends Component
{
    public $href;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href = false, $active = false)
    {
        $this->href = $href;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.breadcrumb.item');
    }
}
