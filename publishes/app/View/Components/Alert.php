<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Alert extends Component
{
    /**
     * The alert theme.
     *
     * @var string
     */
    public $theme;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    public $dismissible;

    public $animate;

    /**
     * Create the component instance.
     *
     * @param  string  $theme
     * @param  string  $message
     * @return void
     */
    public function __construct($theme = 'primary', $message = null, $dismissible = false, $animate = false)
    {
        $this->theme = $theme;
        $this->message = $message;
        $this->dismissible = $dismissible;
        $this->animate = $animate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.alert');
    }

    /**
     * Element classes
     *
     * @return string
     */
    public function classes()
    {
        $classes = [];
        $classes[] = 'alert';
        $classes[] = 'alert-' . $this->theme;
        if ($this->dismissible) {
            $classes[] = 'alert-dismissible';
        }
        if ($this->animate) {
            $classes[] = 'fade';
            $classes[] = 'show';
        }
        return implode(' ', $classes);
    }
}
