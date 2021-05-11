<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Badge extends Component
{

    public $theme = '';
    public $pill;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($theme = 'primary', $pill = false)
    {
        $this->theme = $theme;
        $this->pill = $pill;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.badge');
    }

    public function classes() {
        $classes = [];
        $classes[] = 'badge';
        $classes[] = 'badge-' . $this->theme;
        if ($this->pill) {
            $classes[] = 'badge-pill';
        }
        return implode(' ', $classes);
    }
}
