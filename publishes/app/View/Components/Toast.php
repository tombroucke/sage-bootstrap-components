<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Toast extends Component
{

    public $theme = '';

    public $color = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($theme = false, $color = false)
    {
        $this->theme = $theme;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.toast');
    }

    /**
     * Element classes
     *
     * @return string
     */
    public function classes() {
        $classes = ['toast'];
        if ($this->theme) {
            $classes[] = 'bg-' . $this->theme;
        }
        if ($this->color) {
            $classes[] = 'text-' . $this->color;
        }
        return implode(' ', $classes);
    }
}
