<?php

namespace App\View\Components\Nav;

use Roots\Acorn\View\Component;

class Tabs extends Component
{
    public $type = 'tabs';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type = 'tabs')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.nav.tabs');
    }
}
