<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{

    public $tag = '';

    public $theme = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tag = 'a', $theme = 'primary')
    {
        $this->tag = $tag;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.button');
    }

    /**
     * Element classes
     *
     * @return string
     */
    public function classes()
    {
        return 'btn btn-' . $this->theme;
    }
}
